<?php
//Online conection
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

// Run the SQL query safely
$sql = "SELECT * FROM userfeeds ORDER BY feedgroup, feed";
$result = $conn->query($sql);

// Check if the query succeeded
if ($result->num_rows > 0) {
  // Output data of each row
  echo "<title>Select Ration Feeds</title>";
  echo "<br>";
  echo "<div style='width:90%;margin:0 auto;font-size:11pt;font-family:Verdana,sans-serif;'><a href='000ration.html' style='text-decoration:none;font-weight:bold;color:blue;'>GO BACK</a></div>";
  echo "<br>";
  echo "<div style='width:90%;margin:0 auto;font-size:11pt;font-family:Verdana,sans-serif;padding:6px;border:1px solid black;background-color:#f2f0f0;'><form action='002selectedfeeds.php' method='post'>";
  // Iterate over the rows and create checkboxes for each feed
  while ($row = $result->fetch_assoc()) {
    echo "<input type='checkbox' name='feed[]' value='" . $row["feed"] . "'>";
    echo "<label for='feed" . $row["id"] . "'>" . $row["feed"] . "</label><br>";
  }
  echo "<br><input type='submit' value='Include in ration'>";
  echo "</form></div>";
} else {
  echo "<br><div style='width:90%;margin:0 auto;font-size:11pt;font-family:Verdana,sans-serif;'>You haven't transfer feeds to user feed library. Go back to do it. !</div>";
}

$conn->close();
?>
