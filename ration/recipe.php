<?php
// Printing rules - Reviewer Suggestion
echo "<style>
@media print {
  .noprint {
    display: none !important;
  }
}
</style>";

//Online conection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

// Control variable for ration without feeds
$emptyration = 0;

echo "<title>Recipe</title>";
echo "<br>";

// Print & Go Back Buttons (hidden in print view)
echo "<div class='noprint' style='width:90%;margin:0 auto;font-family:Verdana,sans-serif;font-size:11pt;'>";
echo "<button onclick='window.print()' style='padding:8px 16px;font-size:14px;background-color:gray;color:white;border:none;cursor:pointer;margin-right:20px;'>Print Recipe</button>";
echo "<a href='../index.html' style='text-decoration:none;font-weight:bold;color:blue;'>GO BACK</a>";
echo "</div>";

echo "<br>";

// Start of printable content
echo "<div style='width:90%;margin:0 auto;font-family:Verdana,sans-serif;font-size:11pt;'>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get ration data
$sql = "SELECT id, feed, feedgroup, quantity FROM ration WHERE quantity > 0 ORDER BY feedgroup, feed";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $emptyration = 0;
  while ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row["feed"]) . ": " . $row["quantity"] . " %" . "<br>";
  }
} else {
  $emptyration = 1;
}

$conn->close();

if ($emptyration == 1) {
  echo "No feed amounts defined in ration!";
} else {
  echo nl2br(file_get_contents('reportbroiler.txt'));
}

echo "<br>";
echo "</div>";
?>
