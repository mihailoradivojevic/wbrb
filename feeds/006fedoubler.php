<?php
//execute 004feedproc.php for feed duplication in user feed library
// Database connection
// Online connection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

// Original and temporary table names
$originalTable = "userfeeds";
$tempTable = "userfeedstemp";
$idToDuplicate = $_POST['fdcopy'];

//duplicate table
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn1->query("CREATE TABLE $tempTable LIKE $originalTable");
$conn1->query("INSERT INTO $tempTable SELECT * FROM $originalTable");
$conn1->close();

//delete all other records
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
$sql = "DELETE FROM userfeedstemp WHERE ID != '$idToDuplicate'";

if ($conn2->query($sql) === TRUE) {
  $conn2->close();
} else {
  echo "Error deleting record: " . $conn2->error;
  $conn2->close();
}

$conn3 = new mysqli($servername, $username, $password, $dbname);
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}
$sqll  =  "INSERT INTO userfeeds (feed, feedgroup, feedgroupname, supplemental, cpproc, lysproc, metcysproc, metproc, thrproc, valproc, isoproc, argproc, tryproc, leuproc, hisproc, phenproc, fatproc, starchproc, sugarproc, calcproc, phosavlbproc, naproc, cumg, img, femg, mnmg, semg, znmg, vitaiu, vitdiu, viteiu, vitkmg, thiaminmg, riboflavinmg, miacinmg, panthacdmg, pyridoxmg, biotmg, folacdmg, cianocobalmg, cholmg) SELECT feed, feedgroup, feedgroupname, supplemental, cpproc, lysproc, metcysproc, metproc, thrproc, valproc, isoproc, argproc, tryproc, leuproc, hisproc, phenproc, fatproc, starchproc, sugarproc, calcproc, phosavlbproc, naproc, cumg, img, femg, mnmg, semg, znmg, vitaiu, vitdiu, viteiu, vitkmg, thiaminmg, riboflavinmg, miacinmg, panthacdmg, pyridoxmg, biotmg, folacdmg, cianocobalmg, cholmg FROM userfeedstemp";

if ($conn3->query($sqll) === TRUE) {
  $conn3->close();
} else {
  $conn3->close();
  echo "Error deleting record: " . $conn3->error;
}

$conn4 = new mysqli($servername, $username, $password, $dbname);
if ($conn4->connect_error) {
    die("Connection failed: " . $conn4->connect_error);
}

$sqlll = "DROP TABLE IF EXISTS userfeedstemp";

if ($conn4->query($sqlll) === TRUE) {
    $conn4->close();
  	header("Location: 003fedinspct.php"); // Adjust to the actual main page filename
    exit();
} else {
	$conn4->close();
    echo "Error deleting record: " . $conn4->error;
}

?>
