<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Ration Balancer">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="Mihailo Radivojević">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ration Balancer</title>
<style>
html, body {
    margin:0;
    padding:0;
}
body {
    font-family: Verdana, sans-serif;
    font-size: 11pt;
}
h1, h2, h3, h4, h5, h6, a {
    font-size:12pt;
}
#container {
/*outline: 2px dashed red;*/
width:90%;
margin:0 auto;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}
.box {
width:90%;
margin:0 auto;
/*outline: 4px dashed green;*/
}
a {
text-decoration: none;
font-weight: bold;
color: blue;
}
.panels {
border: 1px solid black;
background-color:lightgray;
height:680px;
width:48%;
/*outline: 4px dashed blue;*/
padding:2px;
overflow-y: auto;
}
@media (max-width: 768px) { /* Adjust the breakpoint as needed */
    .panels {
        width: 100%; /* Full width for each panel on small screens */
        margin-bottom: 16px; /* Optional: Adds space between stacked panels */
    }
}
form {
padding:6px;
}
form label {
/*outline: 2px dotted green;*/
display: inline-block;
width:76%;
text-align: right;
}
form input {
width:80px;
}
table, th, td {
border: 1px solid black;
text-align:center;
background-color:white;
}
table {
width:86%;
margin:0 auto;
font-size: 10pt;
}
</style>
</head>
<body>

<div class="box">
<a href="000ration.html">GO BACK</a>
</div>
<br>

<div id="container">
<?php
//Online conection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

// Define variables for requirement storing
$targetliveweightreq=
$agedaysrangereq=
"";

$energykcalreq=
$energymjreq=
$lysprocreq=
$metcysprocreq=
$metprocreq=
$thrprocreq=
$valprocreq=
$isoprocreq=
$argprocreq=
$tryprocreq=
$leuprocreq=
$hisprocreg=
$phenprocreq=
$cpprocreq=
$fatprocreq=
$starchprocreq=
$sugarprocreq=
$calcprocreq=
$phosavlbprocreq=
$naprocreq=
$cumgreq=
$cumgsuppreq=
$imgreq=
$imgsuppreq=
$femgreq=
$femgsuppreq=
$mnmgreq=
$mnmgsuppreq=
$semgreq=
$semgsuppreq=
$znmgreq=
$znmgsuppreq=
$vitaiureq=
$vitaiusuppreq=
$vitdiureq=
$vitdiusuppreq=
$viteiureq=
$viteiusuppreq=
$vitkiureq=
$vitkiusuppreq=
$thiaminmgreq=
$thiaminmgsuppreq=
$riboflavinmgreq=
$riboflavinmgsuppreq=
$miacinmgreq=
$miacinmgsuppreq=
$panthacdmgreq=
$panthacdmgsuppreq=
$pyridoxmgreq=
$biotmgreq=
$folacdmgreq=
$cianocobalmgreq=
$cianocobalmgsuppreq=
$cholmgreq=
$cholmgsuppreq=
0;

// Define variables for ration calculation
$feedinration=
$feedgroupinration=
$feedgroupnameinration=
"";

$quantitytotal=
$supplementalinration=
$energykcaltotal=
$energymjtotal=
$lysproctotal=
$metcysproctotal=
$metproctotal=
$thrproctotal=
$valproctotal=
$isoproctotal=
$argproctotal=
$tryproctotal=
$leuproctotal=
$hisproctotal=
$phenproctotal=
$cpproctotal=
$fatproctotal=
$starchproctotal=
$sugarproctotal=
$calcproctotal=
$phosavlbproctotal=
$naproctotal=
$cumgtotal=
$cumgsupptotal=
$imgtotal=
$imgsupptotal=
$femgtotal=
$femgsupptotal=
$mnmgtotal=
$mnmgsupptotal=
$semgtotal=
$semgsupptotal=
$znmgtotal=
$znmgsupptotal=
$vitaiutotal=
$vitaiusupptotal=
$vitdiutotal=
$vitdiusupptotal=
$viteiutotal=
$viteiusupptotal=
$vitkiutotal=
$vitkiusupptotal=
$thiaminmgtotal=
$thiaminmgsupptotal=
$riboflavinmgtotal=
$riboflavinmgsupptotal=
$miacinmgtotal=
$miacinmgsupptotal=
$panthacdmgtotal=
$panthacdmgsupptotal=
$pyridoxmgtotal=
$biotmgtotal=
$folacdmgtotal=
$cianocobalmgtotal=
$cianocobalmgsupptotal=
$cholmgtotal=
$cholmgsupptotal=
0;

// Create connection for requirement taking over
$connreq = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connreq->connect_error) {
die("Connection failed: " . $connreq->connect_error);
}

//Query for requirements
$sqlreq = "SELECT * FROM reqslctd";
$resultreq = $connreq->query($sqlreq);

//Storing requirements to variables
if ($resultreq->num_rows > 0) {
while($row = $resultreq->fetch_assoc()) {

$targetliveweightreq=$row["targetliveweight"];
$agedaysrangereq=$row["agedaysrange"];
$energykcalreq=$row["energykcal"];
$energymjreq=$row["energymj"];
$lysprocreq=$row["lysproc"];
$metcysprocreq=$row["metcysproc"];
$metprocreq=$row["metproc"];
$thrprocreq=$row["thrproc"];
$valprocreq=$row["valproc"];
$isoprocreq=$row["isoproc"];
$argprocreq=$row["argproc"];
$tryprocreq=$row["tryproc"];
$leuprocreq=$row["leuproc"];
$hisprocreq=$row["hisproc"];
$phenprocreq=$row["phenproc"];
$cpprocreq=$row["cpproc"];
$calcprocreq=$row["calcproc"];
$phosavlbprocreq=$row["phosavlbproc"];
$naprocreq=$row["naproc"];
$cumgreq=$row["cumg"];
$cumgsuppreq=$row["cumgsupp"];
$imgreq=$row["img"];
$imgsuppreq=$row["imgsupp"];
$femgreq=$row["femg"];
$femgsuppreq=$row["femgsupp"];
$mnmgreq=$row["mnmg"];
$mnmgsuppreq=$row["mnmgsupp"];
$semgreq=$row["semg"];
$semgsuppreq=$row["semgsupp"];
$znmgreq=$row["znmg"];
$znmgsuppreq=$row["znmgsupp"];
$vitaiureq=$row["vitaiu"];
$vitaiusuppreq=$row["vitaiusupp"];
$vitdiureq=$row["vitdiu"];
$vitdiusuppreq=$row["vitdiusupp"];
$viteiureq=$row["viteiu"];
$viteiusuppreq=$row["viteiusupp"];
$vitkiureq=$row["vitkiu"];
$vitkiusuppreq=$row["vitkiusupp"];
$thiaminmgreq=$row["thiaminmg"];
$thiaminmgsuppreq=$row["thiaminmgsupp"];
$riboflavinmgreq=$row["riboflavinmg"];
$riboflavinmgsuppreq=$row["riboflavinmgsupp"];
$miacinmgreq=$row["miacinmg"];
$miacinmgsuppreq=$row["miacinmgsupp"];
$panthacdmgreq=$row["panthacdmg"];
$panthacdmgsuppreq=$row["panthacdmgsupp"];
$pyridoxmgreq=$row["pyridoxmg"];
$biotmgreq=$row["biotmg"];
$folacdmgreq=$row["folacdmg"];
$cianocobalmgreq=$row["cianocobalmg"];
$cianocobalmgsuppreq=$row["cianocobalmgsupp"];
$cholmgreq=$row["cholmg"];
$cholmgsuppreq=$row["cholmgsupp"];
}
} else {
echo "0 results";
}
//Conection for requirements closing
$connreq->close();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission and update the quantity column
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fname'])) {
    foreach ($_POST['fname'] as $feedId => $feedQty) {
        $feedQty = htmlspecialchars($feedQty);
        // Update the feedqty for the corresponding feed item in the ration table
        $sql_update = "UPDATE ration SET quantity = ? WHERE id = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param('di', $feedQty, $feedId);  // 'd' for double (number), 'i' for integer (feed id)
        $stmt->execute();
    }
}

// Fetch data to display the form
$sql = "SELECT * FROM ration ORDER BY feedgroup, feed";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<div class="panels">';
  echo '<form method="POST" action="' . $_SERVER['PHP_SELF'] . '">';
  while($row = $result->fetch_assoc()) {
    $inputValue = isset($_POST['fname'][$row['id']]) ? $_POST['fname'][$row['id']] : $row['quantity'];
    $quantitytotal += $row['quantity'];
	$cpproctotal += ($row['quantity']/100)*($row['cpproc']);
	$energykcaltotal += ($row['quantity']/100)*(239.006*(($row["cpproc"]*0.1551)+($row["fatproc"]*0.3431)+($row["starchproc"]*0.1669)+($row["sugarproc"]*0.1301)));
	$energymjtotal += ($row['quantity']/100)*(($row["cpproc"]*0.1551)+($row["fatproc"]*0.3431)+($row["starchproc"]*0.1669)+($row["sugarproc"]*0.1301));
	$lysproctotal += ($row['quantity']/100)*($row['lysproc']);
	$metcysproctotal += ($row['quantity']/100)*($row['metcysproc']);
	$metproctotal += ($row['quantity']/100)*($row['metproc']);
	$thrproctotal += ($row['quantity']/100)*($row['thrproc']);
	$valproctotal += ($row['quantity']/100)*($row['valproc']);
	$isoproctotal += ($row['quantity']/100)*($row['isoproc']);
	$argproctotal += ($row['quantity']/100)*($row['argproc']);
	$tryproctotal += ($row['quantity']/100)*($row['tryproc']);
	$leuproctotal += ($row['quantity']/100)*($row['leuproc']);
	$hisproctotal += ($row['quantity']/100)*($row['hisproc']);
	$phenproctotal += ($row['quantity']/100)*($row['phenproc']);
	$calcproctotal += ($row['quantity']/100)*($row['calcproc']);
	$phosavlbproctotal += ($row['quantity']/100)*($row['phosavlbproc']);
	$naproctotal += ($row['quantity']/100)*($row['naproc']);
	$cumgtotal += ($row['quantity']/100)*$row['cumg'];
	$cumgsupptotal+=($row['quantity']/100)*($row['cumg']* $row['supplemental']);
	$imgtotal += ($row['quantity']/100)*$row['img'];
	$imgsupptotal+=($row['quantity']/100)*($row['img']* $row['supplemental']);
	$femgtotal += ($row['quantity']/100)*$row['femg'];
	$femgsupptotal+=($row['quantity']/100)*($row['femg']* $row['supplemental']);
	$mnmgtotal += ($row['quantity']/100)*$row['mnmg'];
	$mnmgsupptotal+=($row['quantity']/100)*($row['mnmg']* $row['supplemental']);
	$semgtotal += ($row['quantity']/100)*$row['semg'];
	$semgsupptotal+=($row['quantity']/100)*($row['semg']* $row['supplemental']);
	$znmgtotal += ($row['quantity']/100)*$row['znmg'];
	$znmgsupptotal+=($row['quantity']/100)*($row['znmg']* $row['supplemental']);
	$vitaiutotal += ($row['quantity']/100)*$row['vitaiu'];
	$vitaiusupptotal+=($row['quantity']/100)*($row['vitaiu']* $row['supplemental']);
	$vitdiutotal += ($row['quantity']/100)*$row['vitdiu'];
	$vitdiusupptotal+=($row['quantity']/100)*($row['vitdiu']* $row['supplemental']);
	$viteiutotal += ($row['quantity']/100)*$row['viteiu'];
	$viteiusupptotal+=($row['quantity']/100)*($row['viteiu']* $row['supplemental']);
	$vitkiutotal += ($row['quantity']/100)*$row['vitkmg'];
	$vitkiusupptotal+=($row['quantity']/100)*($row['vitkmg']* $row['supplemental']);
	$thiaminmgtotal += ($row['quantity']/100)*$row['thiaminmg'];
	$thiaminmgsupptotal+=($row['quantity']/100)*($row['thiaminmg']* $row['supplemental']);
	$riboflavinmgtotal += ($row['quantity']/100)*$row['riboflavinmg'];
	$riboflavinmgsupptotal+=($row['quantity']/100)*($row['riboflavinmg']* $row['supplemental']);
	$miacinmgtotal += ($row['quantity']/100)*$row['miacinmg'];
	$miacinmgsupptotal+=($row['quantity']/100)*($row['miacinmg']* $row['supplemental']);
	$panthacdmgtotal += ($row['quantity']/100)*$row['panthacdmg'];
	$panthacdmgsupptotal+=($row['quantity']/100)*($row['panthacdmg']* $row['supplemental']);
	$pyridoxmgtotal += ($row['quantity']/100)*$row['pyridoxmg'];
	$biotmgtotal += ($row['quantity']/100)*$row['biotmg'];
	$folacdmgtotal += ($row['quantity']/100)*$row['folacdmg'];
	$cianocobalmgtotal += ($row['quantity']/100)*$row['cianocobalmg'];
	$cholmgsupptotal+=($row['quantity']/100)*($row['cholmg']* $row['supplemental']);
	$cholmgtotal += ($row['quantity']/100)*$row['cholmg'];
	$cianocobalmgsupptotal+=($row['quantity']/100)*($row['cianocobalmg']* $row['supplemental']);
	echo "<label for='" . "fname" .  "'>" . $row["feed"] . "</label>: ";
    echo "<input type='number' name='fname[" . $row['id'] . "]' value='" . htmlspecialchars($inputValue) . "' step='0.01' min='0' required><br><br>";
  }
  echo '<input type="submit" value="Calculate">';
  echo '</form>';
  echo '<br>'.'Feed-total, %: '.$quantitytotal.'<br>';
  echo $targetliveweightreq.'<br>';
  echo $agedaysrangereq.'<br>'.'<br>';
  echo '</div>';
  echo '<div class="panels">';
  echo '<table><tr><th>'.'Parameters'.'</th>'.'<th>'.'In ration'.'</th>'.'<th>'.'Requirements'.'</th>'.'<th>'.'Balance'.'</th></tr>';
  echo '<tr><td>'.'ME, Kcal/kg'.'</td>'.'<td>'.round($energykcaltotal,0).'</td>'.'<td>'.round($energykcalreq,0).'</td>'.'<td>'.round(($energykcaltotal/$energykcalreq),2).'</td></tr>';
  echo '<tr><td>'.'ME, MJ/kg'.'</td>'.'<td>'.round($energymjtotal,2).'</td>'.'<td>'.round($energymjreq,2).'</td>'.'<td>'.round(($energymjtotal/$energymjreq),2).'</td></tr>';
  echo '<tr><td>'.'Crude protein, %'.'</td>'.'<td>'.round($cpproctotal,2).'</td>'.'<td>'.round($cpprocreq,2).'</td>'.'<td>'.round(($cpproctotal/$cpprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Methionine, %'.'</td>'.'<td>'.round($metproctotal,2).'</td>'.'<td>'.round($metprocreq,2).'</td>'.'<td>'.round(($metproctotal/$metprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Methionine&cystine, %'.'</td>'.'<td>'.round($metcysproctotal,2).'</td>'.'<td>'.round($metcysprocreq,2).'</td>'.'<td>'.round(($metcysproctotal/$metcysprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Lysine, %'.'</td>'.'<td>'.round($lysproctotal,2).'</td>'.'<td>'.round($lysprocreq,2).'</td>'.'<td>'.round(($lysproctotal/$lysprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Threonine, %'.'</td>'.'<td>'.round($thrproctotal,2).'</td>'.'<td>'.round($thrprocreq,2).'</td>'.'<td>'.round(($thrproctotal/$thrprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Tryptophan, %'.'</td>'.'<td>'.round($tryproctotal,2).'</td>'.'<td>'.round($tryprocreq,2).'</td>'.'<td>'.round(($tryproctotal/$tryprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Arginine, %'.'</td>'.'<td>'.round($argproctotal,2).'</td>'.'<td>'.round($argprocreq,2).'</td>'.'<td>'.round(($argproctotal/$argprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Valine, %'.'</td>'.'<td>'.round($valproctotal,2).'</td>'.'<td>'.round($valprocreq,2).'</td>'.'<td>'.round(($valproctotal/$valprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Leucine, %'.'</td>'.'<td>'.round($leuproctotal,2).'</td>'.'<td>'.round($leuprocreq,2).'</td>'.'<td>'.round(($leuproctotal/$leuprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Isoleucine, %'.'</td>'.'<td>'.round($isoproctotal,2).'</td>'.'<td>'.round($isoprocreq,2).'</td>'.'<td>'.round(($isoproctotal/$isoprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Histidine, %'.'</td>'.'<td>'.round($hisproctotal,2).'</td>'.'<td>'.round($hisprocreq,2).'</td>'.'<td>'.round(($hisproctotal/$hisprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Phenylalanine, %'.'</td>'.'<td>'.round($phenproctotal,2).'</td>'.'<td>'.round($phenprocreq,2).'</td>'.'<td>'.round(($phenproctotal/$phenprocreq),2).'</td></tr>';
  echo '</table>';
  echo '<br>';
  echo '<table><tr><th>'.'Minerals and vitamins'.'</th>'.'<th>'.'In ration'.'</th>'.'<th>'.'Requirements'.'</th>'.'<th>'.'Balance'.'</th></tr>';
  echo '<tr><td>'.'Total calcium, %'.'</td>'.'<td>'.round($calcproctotal,2).'</td>'.'<td>'.round($calcprocreq,2).'</td>'.'<td>'.round(($calcproctotal/$calcprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Available Phosphorus, %'.'</td>'.'<td>'.round($phosavlbproctotal,2).'</td>'.'<td>'.round($phosavlbprocreq,2).'</td>'.'<td>'.round(($phosavlbproctotal/$phosavlbprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Sodium, %'.'</td>'.'<td>'.round($naproctotal,2).'</td>'.'<td>'.round($naproctotal,2).'</td>'.'<td>'.round(($naproctotal/$naprocreq),2).'</td></tr>';
  echo '<tr><td>'.'Manganese, mg/kg'.'</td>'.'<td>'.round($mnmgtotal,2).'</td>'.'<td>'.round($mnmgreq,2).'</td>'.'<td>'.round(($mnmgtotal/$mnmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Iron, mg/kg'.'</td>'.'<td>'.round($femgtotal,2).'</td>'.'<td>'.round($femgreq,2).'</td>'.'<td>'.round(($femgtotal/$femgreq),2).'</td></tr>';
  echo '<tr><td>'.'Copper, mg/kg'.'</td>'.'<td>'.round($cumgtotal,2).'</td>'.'<td>'.round($cumgreq,2).'</td>'.'<td>'.round(($cumgtotal/$cumgreq),2).'</td></tr>';
  echo '<tr><td>'.'Zinc, mg/kg'.'</td>'.'<td>'.round($znmgtotal,2).'</td>'.'<td>'.round($znmgreq,2).'</td>'.'<td>'.round(($znmgtotal/$znmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Iodine, mg/kg'.'</td>'.'<td>'.round($imgtotal,2).'</td>'.'<td>'.round($imgreq,2).'</td>'.'<td>'.round(($imgtotal/$imgreq),2).'</td></tr>';
  echo '<tr><td>'.'Selenium, mg/kg'.'</td>'.'<td>'.round($semgtotal,2).'</td>'.'<td>'.round($semgreq,2).'</td>'.'<td>'.round(($semgtotal/$semgreq),2).'</td></tr>';
  echo '<tr><td>'.'Vitamin A, IU/kg'.'</td>'.'<td>'.round($vitaiutotal,0).'</td>'.'<td>'.round($vitaiureq,0).'</td>'.'<td>'.round(($vitaiutotal/$vitaiureq),2).'</td></tr>';
  echo '<tr><td>'.'Vitamin D<sub>3</sub>, IU/kg'.'</td>'.'<td>'.round($vitdiutotal,0).'</td>'.'<td>'.round($vitdiureq,0).'</td>'.'<td>'.round(($vitdiutotal/$vitdiureq),0).'</td></tr>';
  echo '<tr><td>'.'Vitamin E, IU/kg'.'</td>'.'<td>'.round($viteiutotal,2).'</td>'.'<td>'.round($viteiureq,2).'</td>'.'<td>'.round(($viteiutotal/$viteiureq),2).'</td></tr>';
  echo '<tr><td>'.'Vitamin K, mg/kg'.'</td>'.'<td>'.round($vitkiutotal,3).'</td>'.'<td>'.round($vitkiureq,3).'</td>'.'<td>'.round(($vitkiutotal/$vitkiureq),2).'</td></tr>';
  echo '<tr><td>'.'Thiamin (B<sub>1</sub>), mg/kg'.'</td>'.'<td>'.round($thiaminmgtotal,3).'</td>'.'<td>'.round($thiaminmgreq,3).'</td>'.'<td>'.round(($thiaminmgtotal/$thiaminmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Riboflavin (B<sub>2</sub>), mg/kg'.'</td>'.'<td>'.round($riboflavinmgtotal,3).'</td>'.'<td>'.round($riboflavinmgreq,3).'</td>'.'<td>'.round(($riboflavinmgtotal/$riboflavinmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Pyridoxine (B<sub>6</sub>), mg/kg'.'</td>'.'<td>'.round($pyridoxmgtotal,3).'</td>'.'<td>'.round($pyridoxmgreq,3).'</td>'.'<td>'.round(($pyridoxmgtotal/$pyridoxmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Pantothenic Acid, mg/kg'.'</td>'.'<td>'.round($panthacdmgtotal,3).'</td>'.'<td>'.round($panthacdmgreq,3).'</td>'.'<td>'.round(($panthacdmgtotal/$panthacdmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Folic Acid, mg/kg'.'</td>'.'<td>'.round($folacdmgtotal,3).'</td>'.'<td>'.round($folacdmgreq,3).'</td>'.'<td>'.round(($folacdmgtotal/$folacdmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Biotin, mg/kg'.'</td>'.'<td>'.round($biotmgtotal,3).'</td>'.'<td>'.round($biotmgreq,3).'</td>'.'<td>'.round(($biotmgtotal/$biotmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Niacin, mg/kg'.'</td>'.'<td>'.round($miacinmgtotal,3).'</td>'.'<td>'.round($miacinmgreq,3).'</td>'.'<td>'.round(($miacinmgtotal/$miacinmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Choline, mg/kg'.'</td>'.'<td>'.round($cholmgtotal,2).'</td>'.'<td>'.round($cholmgreq,2).'</td>'.'<td>'.round(($cholmgtotal/$cholmgreq),2).'</td></tr>';
  echo '<tr><td>'.'Vitamin B<sub>12</sub>, mg/kg'.'</td>'.'<td>'.round($cianocobalmgtotal,3).'</td>'.'<td>'.round($cianocobalmgreq,3).'</td>'.'<td>'.round(($cianocobalmgtotal/$cianocobalmgreq),2).'</td></tr>';
  echo '</table>';
  echo '<br>';
  echo '<table><tr><th>'.'Supplementary'.'</th>'.'<th>'.'In ration'.'</th>'.'<th>'.'Requirements'.'</th>'.'<th>'.'Balance'.'</th></tr>';
  echo '<tr><td>'.'Mn, mg/kg '.'</td>'.'<td>'.round($mnmgsupptotal,2).'</td>'.'<td>'.round($mnmgsuppreq,2).'</td>'.'<td>'.round(($mnmgsupptotal/$mnmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Fe, mg/kg '.'</td>'.'<td>'.round($femgsupptotal,2).'</td>'.'<td>'.round($femgsuppreq,2).'</td>'.'<td>'.round(($femgsupptotal/$femgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Cu, mg/kg '.'</td>'.'<td>'.round($cumgsupptotal,2).'</td>'.'<td>'.round($cumgsuppreq,2).'</td>'.'<td>'.round(($cumgsupptotal/$cumgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Zn, mg/kg '.'</td>'.'<td>'.round($znmgsupptotal,2).'</td>'.'<td>'.round($znmgsuppreq,2).'</td>'.'<td>'.round(($znmgsupptotal/$znmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'I, mg/kg '.'</td>'.'<td>'.round($imgsupptotal,2).'</td>'.'<td>'.round($imgsuppreq,2).'</td>'.'<td>'.round(($imgsupptotal/$imgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Se, mg/kg '.'</td>'.'<td>'.round($semgsupptotal,2).'</td>'.'<td>'.round($semgsuppreq,2).'</td>'.'<td>'.round(($semgsupptotal/$semgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Vitamin A, IU/kg '.'</td>'.'<td>'.round($vitaiusupptotal,2).'</td>'.'<td>'.round($vitaiusuppreq,2).'</td>'.'<td>'.round(($vitaiusupptotal/$vitaiusuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Vitamin D<sub>3</sub>, IU/kg '.'</td>'.'<td>'.round($vitdiusupptotal,2).'</td>'.'<td>'.round($vitdiusuppreq,2).'</td>'.'<td>'.round(($vitdiusupptotal/$vitdiusuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Vitamin E, IU/kg '.'</td>'.'<td>'.round($viteiusupptotal,2).'</td>'.'<td>'.round($viteiusuppreq,2).'</td>'.'<td>'.round(($viteiusupptotal/$viteiusuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Vitamin K, mg/kg '.'</td>'.'<td>'.round($vitkiusupptotal,2).'</td>'.'<td>'.round($vitkiusuppreq,2).'</td>'.'<td>'.round(($vitkiusupptotal/$vitkiusuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Thiamin, mg/kg '.'</td>'.'<td>'.round($thiaminmgsupptotal,2).'</td>'.'<td>'.round($thiaminmgsuppreq,2).'</td>'.'<td>'.round(($thiaminmgsupptotal/$thiaminmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Riboflavin, mg/kg '.'</td>'.'<td>'.round($riboflavinmgsupptotal,2).'</td>'.'<td>'.round($riboflavinmgsuppreq,2).'</td>'.'<td>'.round(($riboflavinmgsupptotal/$riboflavinmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Pantothenic acid, mg/kg '.'</td>'.'<td>'.round($panthacdmgsupptotal,2).'</td>'.'<td>'.round($panthacdmgsuppreq,2).'</td>'.'<td>'.round(($panthacdmgsupptotal/$panthacdmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Niacin, mg/kg '.'</td>'.'<td>'.round($miacinmgsupptotal,2).'</td>'.'<td>'.round($miacinmgsuppreq,2).'</td>'.'<td>'.round(($miacinmgsupptotal/$miacinmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Choline, mg/kg '.'</td>'.'<td>'.round($cholmgsupptotal,2).'</td>'.'<td>'.round($cholmgsuppreq,2).'</td>'.'<td>'.round(($cholmgsupptotal/$cholmgsuppreq),2).'</td></tr>';
	echo '<tr><td>'.'Vitamin B<sub>12</sub>, mg/kg '.'</td>'.'<td>'.round($cianocobalmgsupptotal,3).'</td>'.'<td>'.round($cianocobalmgsuppreq,3).'</td>'.'<td>'.round(($cianocobalmgsupptotal/$cianocobalmgsuppreq),2).'</td></tr>';


  echo '</table>';
  echo '<br>';
  } else {
  echo "0 results";
}

//RECIPE
// Define the filename for the text report
$filename = "reportbroiler.txt";
// Open the file for writing (creates the file if it doesn't exist, or clears it if it does)
$file = fopen($filename, "w");
// Write the header for "RATION PARAMETERS"
fwrite($file, str_repeat("*", 90) . "\n"); // Separator line
fwrite($file, $targetliveweightreq."\n");
fwrite($file, $agedaysrangereq."\n");
fwrite($file, str_repeat("*", 90) . "\n"); // Separator line

// Write the header for "BASIC PARAMETERS"
fwrite($file, "BASIC:\n");
// Define each item row you want to captur
$rows = [
["ME, Kcal/kg ", $energykcaltotal],
["ME, MJ/kg ", $energymjtotal],
["Crude protein (CP), %", $cpproctotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 2 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 2) . "\n");
}

// Write the header for "AMINO ACIDS - DIGESTIBLE, ILEAL STANDARDIZED"
fwrite($file, "\nAMINO ACIDS:\n");
// Define each item row you want to capture
$rows = [
["Methionine, %",$metproctotal],
["Methionine&cystine, %",$metcysproctotal],
["Lysine, %",$lysproctotal],
["Threonine, %",$thrproctotal],
["Tryptophan, %",$tryproctotal],
["Arginine, %",$argproctotal],
["Valine, %",$valproctotal],
["Leucine, %",$leuproctotal],
["Isoleucine, %",$isoproctotal],
["Histidine, %",$hisproctotal],
["Phenylalanine, %",$phenproctotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 2 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 2) . "\n");
}

// Write the header for "MINERALS"
fwrite($file, "\nMINERALS:\n");
// Define each item row you want to capture
$rows = [
["Total calcium, %",$calcproctotal],
["Available Phosphorus, %",$phosavlbproctotal],
["Sodium, %",$naproctotal],
["Manganese, mg/kg",$mnmgtotal],
["Iron, mg/kg",$femgtotal],
["Copper, mg/kg",$cumgtotal],
["Zinc, mg/kg",$znmgtotal],
["Iodine, mg/kg",$imgtotal],
["Selenium, mg/kg",$semgtotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 2 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 2) . "\n");
}

// Write the header for "VITAMINS 2 decimals"
fwrite($file, "\nVITAMINS:\n");
// Define each item row you want to capture
$rows = [
["Vitamin A, IU/kg",$vitaiutotal],
["Vitamin D3, IU/kg",$vitdiutotal],
["Vitamin E, IU/kg",$viteiutotal],
["Vitamin K, mg/kg",$vitkiutotal],
["Thiamin (B1), mg/kg",$thiaminmgtotal],
["Riboflavin (B2), mg/kg",$riboflavinmgtotal],
["Pyridoxine (B6), mg/kg",$pyridoxmgtotal],
["Pantothenic Acid, mg/kg",$panthacdmgtotal],
["Folic Acid, mg/kg",$folacdmgtotal],
["Niacin, mg/kg",$miacinmgtotal],
["Choline, mg/kg", $cholmgtotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 2 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 2) . "\n");
}

// Write VITAMINS 3 decimals
// Define each item row you want to capture
$rows = [
["Biotin, mg/kg",$biotmgtotal],
["Cobalamin (B12), mg/kg",$cianocobalmgtotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 3 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 3) . "\n");
}

// Write the header for "SUPPLEMENTARY"
fwrite($file, "\nSUPPLEMENTARY:\n");
// Define each item row you want to capture
$rows = [
["Manganese, mg/kg",$mnmgsupptotal],
["Iron, mg/kg",$femgsupptotal],
["Copper, mg/kg",$cumgsupptotal],
["Zinc, mg/kg",$znmgsupptotal],
["Iodine, mg/kg",$imgsupptotal],
["Selenium, mg/kg",$semgsupptotal],
["Vitamin A, IU/kg",$vitaiusupptotal],
["Vitamin D3, IU/kg",$vitdiusupptotal],
["Vitamin E, IU/kg",$viteiusupptotal],
["Vitamin K, mg/kg",$vitkiusupptotal],
["Thiamin (B1), mg/kg",$thiaminmgsupptotal],
["Riboflavin (B2), mg/kg",$riboflavinmgsupptotal],
["Niacin, mg/kg",$miacinmgsupptotal],
["Pantothenic Acid, mg/kg",$panthacdmgsupptotal],
["Choline, mg/kg",$cholmgsupptotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 2 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 2) . "\n");
}

$rows = [
["Cobalamin (B12), mg/kg",$cianocobalmgsupptotal]
];
// Loop through each row, format it, and write it to the file
foreach ($rows as $red) {
// Format the row as "Item Name: Value" with 3 decimal places
fwrite($file, $red[0] . ": " . number_format($red[1], 3) . "\n");
}

fclose($file);

$conn->close();

?>

</div>
</body>
</html>