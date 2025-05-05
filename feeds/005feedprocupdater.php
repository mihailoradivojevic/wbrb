<?php
//execute 004feedproc.php for feed editing
// Online connection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_POST['feedgroup'])) {
    $feedgroup = $_POST['feedgroup'];
}
if (isset($_POST['feedgroupname'])) {
    $feedgroupname = $_POST['feedgroupname'];
}
if (isset($_POST['feed'])) {
    $feed = $_POST['feed'];
}
if (isset($_POST['cpproc'])) {
    $cpproc = $_POST['cpproc'];
}
if (isset($_POST['lysproc'])) {
    $lysproc = $_POST['lysproc'];
}
if (isset($_POST['metcysproc'])) {
    $metcysproc = $_POST['metcysproc'];
}
if (isset($_POST['metproc'])) {
    $metproc = $_POST['metproc'];
}
if (isset($_POST['thrproc'])) {
    $thrproc = $_POST['thrproc'];
}
if (isset($_POST['valproc'])) {
    $valproc = $_POST['valproc'];
}
if (isset($_POST['isoproc'])) {
    $isoproc = $_POST['isoproc'];
}
if (isset($_POST['argproc'])) {
    $argproc = $_POST['argproc'];
}
if (isset($_POST['tryproc'])) {
    $tryproc = $_POST['tryproc'];
}
if (isset($_POST['leuproc'])) {
    $leuproc = $_POST['leuproc'];
}
if (isset($_POST['hisproc'])) {
    $hisproc = $_POST['hisproc'];
}
if (isset($_POST['phenproc'])) {
    $phenproc = $_POST['phenproc'];
}
if (isset($_POST['fatproc'])) {
    $fatproc = $_POST['fatproc'];
}
if (isset($_POST['starchproc'])) {
    $starchproc = $_POST['starchproc'];
}
if (isset($_POST['sugarproc'])) {
    $sugarproc = $_POST['sugarproc'];
}
if (isset($_POST['calcproc'])) {
    $calcproc = $_POST['calcproc'];
}
if (isset($_POST['phosavlbproc'])) {
    $phosavlbproc = $_POST['phosavlbproc'];
}
if (isset($_POST['naproc'])) {
    $naproc = $_POST['naproc'];
}
if (isset($_POST['cumg'])) {
    $cumg = $_POST['cumg'];
}
if (isset($_POST['img'])) {
    $img = $_POST['img'];
}
if (isset($_POST['femg'])) {
    $femg = $_POST['femg'];
}
if (isset($_POST['mnmg'])) {
    $mnmg = $_POST['mnmg'];
}
if (isset($_POST['semg'])) {
    $semg = $_POST['semg'];
}
if (isset($_POST['znmg'])) {
    $znmg = $_POST['znmg'];
}
if (isset($_POST['vitaiu'])) {
    $vitaiu = $_POST['vitaiu'];
}
if (isset($_POST['vitdiu'])) {
    $vitdiu = $_POST['vitdiu'];
}
if (isset($_POST['viteiu'])) {
    $viteiu = $_POST['viteiu'];
}
if (isset($_POST['vitkmg'])) {
    $vitkmg = $_POST['vitkmg'];
}
if (isset($_POST['thiaminmg'])) {
    $thiaminmg = $_POST['thiaminmg'];
}
if (isset($_POST['riboflavinmg'])) {
    $riboflavinmg = $_POST['riboflavinmg'];
}
if (isset($_POST['miacinmg'])) {
    $miacinmg = $_POST['miacinmg'];
}
if (isset($_POST['panthacdmg'])) {
    $panthacdmg = $_POST['panthacdmg'];
}
if (isset($_POST['pyridoxmg'])) {
    $pyridoxmg = $_POST['pyridoxmg'];
}
if (isset($_POST['biotmg'])) {
    $biotmg = $_POST['biotmg'];
}
if (isset($_POST['folacdmg'])) {
    $folacdmg = $_POST['folacdmg'];
}
if (isset($_POST['cianocobalmg'])) {
    $cianocobalmg = $_POST['cianocobalmg'];
}
if (isset($_POST['cholmg'])) {
    $cholmg = $_POST['cholmg'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE userfeeds SET feedgroup='$feedgroup', feedgroupname='$feedgroupname', feed='$feed', cpproc='$cpproc', lysproc='$lysproc', metcysproc='$metcysproc', metproc='$metproc', thrproc='$thrproc', valproc='$valproc', isoproc='$isoproc', argproc='$argproc', tryproc='$tryproc', leuproc='$leuproc', hisproc='$hisproc', phenproc='$phenproc', fatproc='$fatproc', starchproc='$starchproc', sugarproc='$sugarproc', calcproc='$calcproc', phosavlbproc='$phosavlbproc', naproc='$naproc', cumg='$cumg', img='$img', femg='$femg', mnmg='$mnmg', semg='$semg', znmg='$znmg', vitaiu='$vitaiu', vitdiu='$vitdiu', viteiu='$viteiu', vitkmg='$vitkmg', thiaminmg='$thiaminmg', riboflavinmg='$riboflavinmg', miacinmg='$miacinmg', panthacdmg='$panthacdmg', pyridoxmg='$pyridoxmg', biotmg='$biotmg', folacdmg='$folacdmg', cianocobalmg='$cianocobalmg', cholmg='$cholmg' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    $conn->close();
	header("Location: 003fedinspct.php"); // Adjust to the actual main page filename
    exit();
} else {
  echo "Error updating record: " . $conn->error;
  $conn->close();
}

?>
