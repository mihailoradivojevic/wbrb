<?php
// Online connection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch feeds data
$sql = "SELECT * FROM userfeeds ORDER BY feedgroup, feed";
$result = $conn->query($sql);

echo '<title>Delete User Feeds</title>';
echo '<style>
input[type=checkbox] + label {
font-family:Verdana,sans-serif;
font-size:10pt;
}
</style>';
		  
if ($result->num_rows > 0) {
    echo '<a href="feeds.html" style="text-decoration:none;font-weight:bold;color:blue;font-family:Verdana,sans-serif;font-size:11pt;">GO BACK</a>';
	echo '<br><br>';
    echo '<div style="width:90%;margin:0 auto;padding:6px;font-family:Verdana,sans-serif;font-size:10pt;background-color:#f2f0f0;border:1px solid black;">
          <form method="post" action="008ersfeeds.php">';
    // Generate checkboxes for each row
    while ($row = $result->fetch_assoc()) {
        echo '<input type="checkbox" id=' . '"' . $row['id']. '"' . ' name="feeds[]" value="' . $row['id'] . '">';
		echo '<label for="'. $row['id'] .'">';
        echo $row['feed'] . ' - ' . $row['feedgroupname'];
        echo '</label><br>';
    }
    echo "<br><br>";
    echo '<input type="submit" value="Delete">';
    echo '</form></div>';
    $conn->close();
} else {
    echo '<a href="feeds.html" style="text-decoration:none;font-weight:bold;color:blue;font-family:Verdana,sans-serif;font-size:9pt;">GO BACK</a>';
    echo '<div style="width:90%;margin:0 auto;padding:6px;font-family:Verdana,sans-serif;font-size:10pt;">No feeds found transferred to user feed library !!!</div>';
    $conn->close();
}
?>
