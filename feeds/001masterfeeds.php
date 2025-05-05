<?php
// Build form to transfer feeds from master to user feed library
// Database connection settings
//Online
$host = 'localhost';
$dbname = 'animscim_animscim_broileralek';
$username = 'animscim_animscim_chickenalek';
$password = 'iwTkARsfPrkM';

// Create a new MySQLi connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data grouped by group_name
$sql = "SELECT feedgroupname, feed FROM masterfeeds ORDER BY feedgroup, feed";
$result = $mysqli->query($sql);

// Process results into an associative array
$feedgroupnames = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $feedgroupname = $row['feedgroupname'];
        $feed = $row['feed'];
        
        // Organize feeds by group name
        if (!isset($feedgroupnames[$feedgroupname])) {
        $feedgroupnames[$feedgroupname] = [];
        }
        $feedgroupnames[$feedgroupname][] = $feed;
    }
}

echo "<title>Master Feed Library</title>";
echo '<div style="width:90%;margin:0 auto;font-size:10pt;font-family:Verdana,sans-serif;background-color:#f2f0f0;border:1px solid black;">';
echo '<div style="width:90%;margin:0 auto;font-size:11pt;"><a href="feeds.html" style="text-decoration:none;font-weight:bold;color:blue;">GO BACK</a></div><br>';
echo '<div style="width:90%;margin:0 auto;"><button type="submit" form="form1">Transfer selected feeds to user feed library</button></div>';

// Display the groups and their feeds
echo "<form method='post' action='002masterfeedview.php' id='form1' style='width:90%;margin:0 auto;padding:6px;display:flex;flex-wrap: wrap;justify-content:center;background-color:#f2f0f0;'>";
foreach ($feedgroupnames as $feedgroupname => $feeds) {
    echo "<div style='margin:4px;padding:2px;border: 1px solid black;width: 380px;height: 160px;overflow-y:auto;'>";
    echo "<h4 style='font-size:12pt;'>$feedgroupname</h4>";
    foreach ($feeds as $feed) {
        echo "<input type='checkbox' name='form1_check[]' value='$feed'>$feed<br>";
    }
    echo "</div>";
}
echo "</form>";
echo "</div>";
// Close the MySQLi connection
$mysqli->close();
?>
