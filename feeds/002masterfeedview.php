<?php
$connectionOpened = 0; // Flag to track connection status
$targetfile = 0;
$targetfilemsg = "";
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

// Check if the form was submitted and feeds are selected
if (isset($_POST['form1_check']) && !empty($_POST['form1_check'])) {
    // Sanitize and prepare feeds for SQL IN clause
    $feedValues = array_map([$mysqli, 'real_escape_string'], $_POST['form1_check']);
    $feedList = "'" . implode("','", $feedValues) . "'";

	// SQL query to insert all columns except ID from masterfeeds to userfeedlib
	$sql = "INSERT INTO userfeeds (feed, feedgroup, feedgroupname, supplemental, cpproc, metcysproc, metproc, lysproc, thrproc, tryproc, argproc, valproc, leuproc, isoproc, hisproc, phenproc, fatproc, starchproc, sugarproc, calcproc, phosavlbproc, naproc, mnmg, femg, cumg, znmg, img, semg, vitaiu, vitdiu, viteiu, vitkmg, thiaminmg, riboflavinmg, pyridoxmg, panthacdmg, folacdmg, biotmg, miacinmg, cholmg, cianocobalmg) 
            SELECT feed, feedgroup, feedgroupname, supplemental, cpproc, metcysproc, metproc, lysproc, thrproc, tryproc, argproc, valproc, leuproc, isoproc, hisproc, phenproc, fatproc, starchproc, sugarproc, calcproc, phosavlbproc, naproc, mnmg, femg, cumg, znmg, img, semg, vitaiu, vitdiu, viteiu, vitkmg, thiaminmg, riboflavinmg, pyridoxmg, panthacdmg, folacdmg, biotmg, miacinmg, cholmg, cianocobalmg FROM masterfeeds 
            WHERE feed IN ($feedList)";

    // Execute the SQL query and check for errors
    if ($mysqli->query($sql) === TRUE) {
		$connectionOpened = 1;
		$targetfile = 1;
    } else {
		$connectionOpened = 1;
		$targetfile = 2;
    }
} else {
	$connectionOpened = 1;
	$targetfile = 3;
}

if ($targetfile == 1) {
    $targetfilemsg = "libinssucc.php";
} elseif ($targetfile == 2) {
    $targetfilemsg = "libinserr.php";
} else {
    $targetfilemsg = "libinsnone.php";
}

//Connection closing
if ($connectionOpened == 1) {
$connectionOpened = 0;
$targetfile = 0;
$mysqli->close();
}

header("Location: " . $targetfilemsg);
exit();

?>
