<?php
//build form for editing of feeds in user library
// Online connection
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";

if (isset($_POST['feedtoproc'])) {
    $id = $_POST['feedtoproc'];
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM userfeeds WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<title>Feed Viewer and Editor</title>";
  echo "<br>";
  echo "<form method='post' action='005feedprocupdater.php' style='width: 90%;margin:0 auto;background-color:#f2f0f0;font-family: Verdana, sans-serif;'>";
  while($row = $result->fetch_assoc()) {
    echo "<input type='submit' id='submiter' value='Update / Back' style='width:200px;margin:0 auto;'>"."<br>";
	echo "<label for='id' style ='display:inline-block;width:280px;text-align:right;'>ID: </label>". " ";
    echo "<input type='text' name='id'"." value='".$row["id"]."' readonly style='color: red;width: 480px;'>"."<br><br>";
	//no label for hidden input
	echo "<input type='text' name='feedgroup'"." value='".$row["feedgroup"]."' hidden>";
	echo "<label for='feedgroupname' style ='display:inline-block;width:280px;text-align:right;'>Group: </label>". " ";
	echo "<input type='text' name='feedgroupname'"." value='".$row["feedgroupname"]."' readonly style='color:red;width:480px;'>"."<br><br>";
	echo "<label for='feed' style ='display:inline-block;width:280px;text-align:right;'>Feed: </label>". " ";
	echo "<input type='text' name='feed'"." value='".$row["feed"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='energykcal' style ='display:inline-block;width:280px;text-align:right;'>ME, kcal/kg: </label>". " ";
	echo "<input type='text' name='energykcal' value='" . round(239.006 * (($row["cpproc"] * 0.1551) + ($row["fatproc"] * 0.3431) + ($row["starchproc"] * 0.1669) + ($row["sugarproc"] * 0.1301)), 0) . "' readonly style='color:red;width:480px;'><br><br>";
	echo "<label for='energymj' style ='display:inline-block;width:280px;text-align:right;'>ME, MJ/kg: </label>". " ";
	echo "<input type='text' name='energymj'"." value='".round((($row["cpproc"]*0.1551)+($row["fatproc"]*0.3431)+($row["starchproc"]*0.1669)+($row["sugarproc"]*0.1301)),2)."' readonly style='color:red;width:480px;'>"."<br><br>";
	echo "<label for='cpproc' style ='display:inline-block;width:280px;text-align:right;'>Crude Protein (CP), %: </label>". " ";
	echo "<input type='text' name='cpproc'"." value='".$row["cpproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='metcysproc' style ='display:inline-block;width:280px;text-align:right;'>Methionine&Cystine, %: </label>". " ";
	echo "<input type='text' name='metcysproc'"." value='".$row["metcysproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='metproc' style ='display:inline-block;width:280px;text-align:right;'>Methionine, %: </label>". " ";
	echo "<input type='text' name='metproc'"." value='".$row["metproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='lysproc' style ='display:inline-block;width:280px;text-align:right;'>Lysine, %: </label>". " ";
	echo "<input type='text' name='lysproc'"." value='".$row["lysproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='thrproc' style ='display:inline-block;width:280px;text-align:right;'>Threonine, %: </label>". " ";
	echo "<input type='text' name='thrproc'"." value='".$row["thrproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='tryproc' style ='display:inline-block;width:280px;text-align:right;'>Tryptophan, %: </label>". " ";
	echo "<input type='text' name='tryproc'"." value='".$row["tryproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='argproc' style ='display:inline-block;width:280px;text-align:right;'>Arginine, %: </label>". " ";
	echo "<input type='text' name='argproc'"." value='".$row["argproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='valproc' style ='display:inline-block;width:280px;text-align:right;'>Valine, %: </label>". " ";
	echo "<input type='text' name='valproc'"." value='".$row["valproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='leuproc' style ='display:inline-block;width:280px;text-align:right;'>Leucine, %: </label>". " ";
	echo "<input type='text' name='leuproc'"." value='".$row["leuproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='isoproc' style ='display:inline-block;width:280px;text-align:right;'>Isoleucine, %: </label>". " ";
	echo "<input type='text' name='isoproc'"." value='".$row["isoproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='hisproc' style ='display:inline-block;width:280px;text-align:right;'>Histidine, %: </label>". " ";
	echo "<input type='text' name='hisproc'"." value='".$row["hisproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='phenproc' style ='display:inline-block;width:280px;text-align:right;'>Phenylalanine, %: </label>". " ";
	echo "<input type='text' name='phenproc'"." value='".$row["phenproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='fatproc' style ='display:inline-block;width:280px;text-align:right;'>Fat, %: </label>". " ";
	echo "<input type='text' name='fatproc'"." value='".$row["fatproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='starchproc' style ='display:inline-block;width:280px;text-align:right;'>Starch, %: </label>". " ";
	echo "<input type='text' name='starchproc'"." value='".$row["starchproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='sugarproc' style ='display:inline-block;width:280px;text-align:right;'>Sugar, %: </label>". " ";
	echo "<input type='text' name='sugarproc'"." value='".$row["sugarproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='calcproc' style ='display:inline-block;width:280px;text-align:right;'>Calcium (Ca), %: </label>". " ";
	echo "<input type='text' name='calcproc'"." value='".$row["calcproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='phosavlbproc' style ='display:inline-block;width:280px;text-align:right;'>Phosphorus, available (P), %: </label>". " ";
	echo "<input type='text' name='phosavlbproc'"." value='".$row["phosavlbproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='naproc' style ='display:inline-block;width:280px;text-align:right;'>Sodium (Na), %: </label>". " ";
	echo "<input type='text' name='naproc'"." value='".$row["naproc"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='mnmg' style ='display:inline-block;width:280px;text-align:right;'>Manganese (Mn), mg/kg: </label>". " ";
	echo "<input type='text' name='mnmg'"." value='".$row["mnmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='femg' style ='display:inline-block;width:280px;text-align:right;'>Iron (Fe), mg/kg: </label>". " ";
	echo "<input type='text' name='femg'"." value='".$row["femg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='cumg' style ='display:inline-block;width:280px;text-align:right;'>Copper (Cu), mg/kg: </label>". " ";
	echo "<input type='text' name='cumg'"." value='".$row["cumg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='znmg' style ='display:inline-block;width:280px;text-align:right;'>Zinc (Zn), mg/kg: </label>". " ";
	echo "<input type='text' name='znmg'"." value='".$row["znmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='img' style ='display:inline-block;width:280px;text-align:right;'>Iodine (I), mg/kg: </label>". " ";
	echo "<input type='text' name='img'"." value='".$row["img"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='semg' style ='display:inline-block;width:280px;text-align:right;'>Selenium (Se), mg/kg: </label>". " ";
	echo "<input type='text' name='semg'"." value='".$row["semg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='vitaiu' style ='display:inline-block;width:280px;text-align:right;'>Vitamin A, IU/kg: </label>". " ";
	echo "<input type='text' name='vitaiu'"." value='".$row["vitaiu"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='vitdiu' style ='display:inline-block;width:280px;text-align:right;'>Vitamin D<sub>3</sub>, IU/kg: </label>". " ";
	echo "<input type='text' name='vitdiu'"." value='".$row["vitdiu"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='viteiu' style ='display:inline-block;width:280px;text-align:right;'>Vitamin E, IU/kg: </label>". " ";
	echo "<input type='text' name='viteiu'"." value='".$row["viteiu"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='vitkmg' style ='display:inline-block;width:280px;text-align:right;'>Vitamin K, mg/kg: </label>". " ";
	echo "<input type='text' name='vitkmg'"." value='".$row["vitkmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='thiaminmg' style ='display:inline-block;width:280px;text-align:right;'>Thiamin (B<sub>1</sub>), mg/kg: </label>". " ";
	echo "<input type='text' name='thiaminmg'"." value='".$row["thiaminmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='riboflavinmg' style ='display:inline-block;width:280px;text-align:right;'>Riboflavin (B<sub>2</sub>), mg/kg: </label>". " ";
	echo "<input type='text' name='riboflavinmg'"." value='".$row["riboflavinmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='pyridoxmg' style ='display:inline-block;width:280px;text-align:right;'>Pyridoxine (B<sub>6</sub>), mg/kg: </label>". " ";
	echo "<input type='text' name='pyridoxmg'"." value='".$row["pyridoxmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='panthacdmg' style ='display:inline-block;width:280px;text-align:right;'>Pantothenic acid (B<sub>5</sub>), mg/kg: </label>". " ";
	echo "<input type='text' name='panthacdmg'"." value='".$row["panthacdmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='folacdmg' style ='display:inline-block;width:280px;text-align:right;'>Folic acid (B<sub>9</sub>, folacin), mg/kg: </label>". " ";
	echo "<input type='text' name='folacdmg'"." value='".$row["folacdmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='biotmg' style ='display:inline-block;width:280px;text-align:right;'>Biotin (B<sub>7</sub>, H), mg/kg: </label>". " ";
	echo "<input type='text' name='biotmg'"." value='".$row["biotmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='miacinmg' style ='display:inline-block;width:280px;text-align:right;'>Niacin (B<sub>3</sub>), mg/kg: </label>". " ";
	echo "<input type='text' name='miacinmg'"." value='".$row["miacinmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='cholmg' style ='display:inline-block;width:280px;text-align:right;'>Choline, mg/kg: </label>". " ";
	echo "<input type='text' name='cholmg'"." value='".$row["cholmg"]."' style='width:480px;'>"."<br><br>";
	echo "<label for='cianocobalmg' style ='display:inline-block;width:280px;text-align:right;'>Vitamin B<sub>12</sub> (cobalamin), mg/kg: </label>". " ";
	echo "<input type='text' name='cianocobalmg'"." value='".$row["cianocobalmg"]."' style='width:480px;'>"."<br><br>";
	}
  echo "</form>";
} else {
  echo "0 results";
}
echo "<div class='duplicator' style='width: 90%;margin:0 auto;background-color:#f2f0f0;'><form method='post' action='006fedoubler.php'>";
echo "<input type='checkbox' name='fdcopy'"." value='" . $id . "' style='width:40px;'>";
echo "<input type='submit'"." value='" . "&#128464;" ."' style='width:40px;'>"."<br>";
echo "</form></div><br>";

$conn->close();

?>

