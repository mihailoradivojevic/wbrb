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

// Check if the form was submitted and feeds were selected
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['feeds'])) {
    // Sanitize and prepare IDs for deletion
    $idsToDelete = $_POST['feeds'];
    $ids = implode(',', array_map('intval', $idsToDelete)); // Convert each ID to integer for security

    // SQL query to delete records with the selected IDs
    $deleteQuery = "DELETE FROM userfeeds WHERE ID IN ($ids)";

    if ($conn->query($deleteQuery) === TRUE) {
        $conn->close();//correction
		header("Location: 007dltfeeds.php");
		exit();
    } else {
        echo "Error deleting feeds: " . $conn->error;
    }
} else {
    $conn->close();//correction
	header("Location: 007dltfeeds.php");
}

?>