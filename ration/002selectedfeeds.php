<?php
//Online conection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (empty($_POST['feed'])) {
    // No feeds selected
    header("Location: 001feedselector.php");
	exit;
} else {
    // Selected feeds
    $selectedFeeds = $_POST['feed'];

    // Check if the `ration` table exists
    $checkTableQuery = "SHOW TABLES LIKE 'ration'";
    $tableExists = $conn->query($checkTableQuery);

    if ($tableExists->num_rows > 0) {
        // If the `ration` table exists, drop it
        $dropTableQuery = "DROP TABLE ration";
        if (!$conn->query($dropTableQuery)) {
            die("Error deleting the existing ration table: " . $conn->error);
        }
    }

    // Step 1: Create the `ration` table with the selected feeds
    $feedList = "'" . implode("','", array_map([$conn, 'real_escape_string'], $selectedFeeds)) . "'";
    $createTableQuery = "
        CREATE TABLE ration AS
        SELECT * FROM userfeeds
        WHERE feed IN ($feedList)
        ORDER BY feedgroup, feed
    ";

    if (!$conn->query($createTableQuery)) {
        die("Error creating ration table: " . $conn->error);
    }

    // Step 2: Add primary key to the `id` column
    $addPrimaryKeyQuery = "
        ALTER TABLE ration
        ADD PRIMARY KEY (id)
    ";

    if (!$conn->query($addPrimaryKeyQuery)) {
        die("Error adding primary key to id column: " . $conn->error);
    }

    // Step 3: Add a DECIMAL(4,2) column named `quantity` after the `feed` column
    $addQuantityColumnQuery = "
        ALTER TABLE ration
        ADD COLUMN quantity DECIMAL(4,2) NOT NULL DEFAULT 0.00 AFTER feed
    ";

    if ($conn->query($addQuantityColumnQuery)) {
        header("Location: 003ration.php");
		exit();
    } else {
        echo "<div class='error'>Error adding quantity column: " . $conn->error . "</div>";
    }

}

$conn->close();
?>
