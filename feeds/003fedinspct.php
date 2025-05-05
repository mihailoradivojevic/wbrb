<?php
$connectionClosed = false; // Flag to track connection status
// Online connection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM userfeeds ORDER BY feedgroup, feed";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<title>User Feed Library</title>";
    echo "<a href='feeds.html' style='text-decoration:none;color:blue;font-weight:bold;font-family:Verdana,sans-serif;font-size:11pt;'>GO BACK</a>";
    echo "<div style='width:90%;margin:0 auto;font-family:Verdana,sans-serif;background-color:#f2f0f0;'>";
    echo "<table style='border:1px solid black;text-align:center;width:100%;font-size:8pt;'>";
    echo "<tr><th style='border:1px solid black;text-align:center;'>ID</th>";
    echo "<th style='border:1px solid black;text-align:center;'>&#128269;</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Group</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Feed</th>";
    echo "<th style='border:1px solid black;text-align:center;'>ME, kcal/kg</th>";
    echo "<th style='border:1px solid black;text-align:center;'>ME, MJ/kg</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Crude protein (CP), %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Lysine, %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Methionine&Cystine, %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Methionine, %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Threonine, %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Tryptophan, %</th>";
    echo "<th style='border:1px solid black;text-align:center;'>Arginine, %</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='border:1px solid black;text-align:center;height:20px;'>";
        echo "<form method='post' action='004feedproc.php'>";
        echo "<input type='text' name='feedtoproc' value='" . $row["id"] . "' readonly style='color:red;background-color:#f2f0f0;width:30px;border:0;'>";
        echo "<input type='text' name='feedgrouptoproc' value='" . $row["feedgroup"] . "' hidden>";
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo "<input type='submit' value='&gt;&gt;'>" . "</form>";
        echo "</td><td style='border:1px solid black;text-align:center;'>" . $row["feedgroupname"];
        echo "</td><td style='border:1px solid black;text-align:center;'>" . $row["feed"];
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format((239.006 * (($row["cpproc"] * 0.1551) + ($row["fatproc"] * 0.3431) + ($row["starchproc"] * 0.1669) + ($row["sugarproc"] * 0.1301))), 0);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format((($row["cpproc"] * 0.1551) + ($row["fatproc"] * 0.3431) + ($row["starchproc"] * 0.1669) + ($row["sugarproc"] * 0.1301)), 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["cpproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["lysproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["metcysproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["metproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["thrproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["tryproc"], 2);
        echo "</td><td style='border:1px solid black;text-align:center;'>";
        echo number_format($row["argproc"], 2) . "</td>";
        echo "</tr>";
    }
    echo "</table></div>";

    if (!$connectionClosed) {
        $conn->close();
        $connectionClosed = true;
    }
} else {
	echo "<br>";
	echo "<a href='feeds.html' style='text-decoration:none;color:blue;font-weight:bold;font-family:Verdana,sans-serif;font-size:11pt;'>GO BACK</a>";
	echo "<br>";
    echo "<div style='width:90%;margin:0 auto;font-family:Verdana,sans-serif;font-size:10pt;'>First go back and transfer some feeds from master to user library !!!</div>";

    if (!$connectionClosed) {
        $conn->close();
        $connectionClosed = true;
    }
}

// Extra connection close attempt (won't execute if already closed)
if (!$connectionClosed) {
    $conn->close();
}
?>
