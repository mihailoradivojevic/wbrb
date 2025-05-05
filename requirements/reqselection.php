<?php

//defining variables in which requirements will be stored during overwiev generating

$stashtargetliveweight=
$stashagedaysrange=
"";

$stashenergykcal=
$stashenergymj=
$stashprotbased=
$stashcpproc=
$stashmetproc=
$stashmetcysproc=
$stashlysproc=
$stashthrproc=
$stashtryproc=
$stashargproc=
$stashvalproc=
$stashleuproc=
$stashisoproc=
$stashhisproc=
$stashphenproc=
$stashcalcproc=
$stashphosavlbproc=
$stashnaproc=
$stashmnmg=
$stashmnmgsupp=
$stashfemg=
$stashfemgsupp=
$stashcumg=
$stashcumgsupp=
$stashznmg=
$stashznmgsupp=
$stashimg=
$stashimgsupp=
$stashsemg=
$stashsemgsupp=
$stashvitaiu=
$stashvitaiusupp=
$stashvitdiu=
$stashvitdiusupp=
$stashviteiu=
$stashviteiusupp=
//it is just the variable name - vit k is expresed in mg/kg, not in IU
$stashvitkiu=
$stashvitkiusupp=
$stashthiaminmg=
$stashthiaminmgsupp=
$stashriboflavinmg=
$stashriboflavinmgsupp=
$stashpyridoxmg=
$stashpanthacdmg=
$stashpanthacdmgsupp=
$stashfolacdmg=
$stashbiotmg=
//it is a typo so that variable miacin stands for niacin
$stashmiacinmg=
$stashmiacinmgsupp=
$stashcholmg=
$stashcholmgsupp=
$stashcianocobalmg=
$stashcianocobalmgsupp=
0;

//obtaining selected category
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedrequirements = $_POST['selectedrequirements'];
	$selectedrequirementsnumber = intval($selectedrequirements);
    } else {
$selectedrequirementsnumber=1;
}

//database conection online
$servername = "localhost";
$username = "animscim_animscim_chickenalek";
$password = "iwTkARsfPrkM";
$dbname = "animscim_animscim_broileralek";


// Create connection for requirements oberview and storing them in variables
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reqexpo WHERE id='$selectedrequirementsnumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// preparing variables for updating table reqslctd
while($row = $result->fetch_assoc()) {
$stashtargetliveweight=$row["targetliveweight"];
$stashagedaysrange=$row["agedaysrange"];
$stashenergykcal=$row["energykcal"];
$stashenergymj=$row["energymj"];
$stashcpproc=$row["cpproc"];
$stashmetproc=$row["metproc"];
$stashmetcysproc=$row["metcysproc"];
$stashlysproc=$row["lysproc"];
$stashthrproc=$row["thrproc"];
$stashtryproc=$row["tryproc"];
$stashargproc=$row["argproc"];
$stashvalproc=$row["valproc"];
$stashleuproc=$row["leuproc"];
$stashisoproc=$row["isoproc"];
$stashhisproc=$row["hisproc"];
$stashphenproc=$row["phenproc"];
$stashcalcproc=$row["calcproc"];
$stashphosavlbproc=$row["phosavlbproc"];
$stashnaproc=$row["naproc"];
$stashmnmg=$row["mnmg"];
$stashmnmgsupp=$row["mnmgsupp"];
$stashfemg=$row["femg"];
$stashfemgsupp=$row["femgsupp"];
$stashcumg=$row["cumg"];
$stashcumgsupp=$row["cumgsupp"];
$stashznmg=$row["znmg"];
$stashznmgsupp=$row["znmgsupp"];
$stashimg=$row["img"];
$stashimgsupp=$row["imgsupp"];
$stashsemg=$row["semg"];
$stashsemgsupp=$row["semgsupp"];
$stashvitaiu=$row["vitaiu"];
$stashvitaiusupp=$row["vitaiusupp"];
$stashvitdiu=$row["vitdiu"];
$stashvitdiusupp=$row["vitdiusupp"];
$stashviteiu=$row["viteiu"];
$stashviteiusupp=$row["viteiusupp"];
$stashvitkiu=$row["vitkiu"];
$stashvitkiusupp=$row["vitkiusupp"];
$stashthiaminmg=$row["thiaminmg"];
$stashthiaminmgsupp=$row["thiaminmgsupp"];
$stashriboflavinmg=$row["riboflavinmg"];
$stashriboflavinmgsupp=$row["riboflavinmgsupp"];
$stashpyridoxmg=$row["pyridoxmg"];
$stashpanthacdmg=$row["panthacdmg"];
$stashpanthacdmgsupp=$row["panthacdmgsupp"];
$stashfolacdmg=$row["folacdmg"];
$stashbiotmg=$row["biotmg"];
$stashmiacinmg=$row["miacinmg"];
$stashmiacinmgsupp=$row["miacinmgsupp"];
$stashcholmg=$row["cholmg"];
$stashcholmgsupp=$row["cholmgsupp"];
$stashcianocobalmg=$row["cianocobalmg"];
$stashcianocobalmgsupp=$row["cianocobalmgsupp"];

// output data of each row
echo "<title>Broiler Nutrition Specifications</title>";
echo "<div style='width:90%;margin:0 auto;'><a href='001requirements.html' style='text-decoration:none;font-weight:bold;color:blue;font-family:Verdana,sans-serif;'>GO BACK</a></div>";
echo "<div style='width:90%;margin:0 auto;display:flex;flex-wrap:wrap;justify-content:left;font-family:Verdana,sans-serif;'>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "BASIC PARAMETERS:"."<br>";
echo $row["targetliveweight"]."<br>";
echo $row["agedaysrange"]."<br>";
echo "ME, kcal/kg: ".$row["energykcal"]."<br>";
echo "ME, MJ/kg: ".round($row["energymj"],2)."<br>";
echo "Crude Protein (CP), %: ".round($row["cpproc"],2)."<br>";
echo "</div>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "DIGESTIBLE AMINO ACIDS, %:"."<br>";
echo "Methionine: ".round($row["metproc"],2)."<br>";
echo "Methionine&Cystine: ".round($row["metcysproc"],2)."<br>";
echo "Lysine: ".round($row["lysproc"],2)."<br>";
echo "Threonine: ".round($row["thrproc"],2)."<br>";
echo "Tryptofan: ".round($row["tryproc"],2)."<br>";
echo "Arginine: ".round($row["argproc"],2)."<br>";
echo "Valine: ".round($row["valproc"],2)."<br>";
echo "Leucine: ".round($row["leuproc"],2)."<br>";
echo "Isoleucine: ".round($row["isoproc"],2)."<br>";
echo "Histidine: ".round($row["hisproc"],2)."<br>";
echo "Phenylalanine: ".round($row["phenproc"],2)."<br>";
echo "</div>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "MINERALS, %:"."<br>";
echo "Total Calcium (Ca): ".round($row["calcproc"],2)."<br>";
echo "Avaliable Phosphorus (P): ".round($row["phosavlbproc"],2)."<br>";
echo "Sodium (Na): ".round($row["naproc"],2)."<br>"."<br>";
echo "TRACE MINERALS, mg/kg:"."<br>";
echo "Manganese (Mn): ".round($row["mnmg"],2)."<br>";
echo "Iron (Fe): ".round($row["femg"],2)."<br>";
echo "Copper (Cu): ".round($row["cumg"],2)."<br>";
echo "Zinc (Zn): ".round($row["znmg"],2)."<br>";
echo "Iodine (I): ".round($row["img"],2)."<br>";
echo "Selenium (Se): ".round($row["semg"],2)."<br>";
echo "</div>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "VITAMINS:"."<br>";
echo "Vitamin A, IU/kg: ".round($row["vitaiu"],2)."<br>";
echo "Vitamin D<sub>3</sub>, IU/kg: ".round($row["vitdiu"],2)."<br>";
echo "Vitamin E, IU/kg: ".round($row["viteiu"],2)."<br>";
echo "Vitamin K, mg/kg: ".round($row["vitkiu"],2)."<br>";
echo "Thiamin (B<sub>1</sub>), mg/kg: ".round($row["thiaminmg"],2)."<br>";
echo "Riboflavin (B<sub>2</sub>), mg/kg: ".round($row["riboflavinmg"],2)."<br>";
echo "Pyridoxine (B<sub>6</sub>), mg/kg: ".round($row["pyridoxmg"],2)."<br>";
echo "Panthothenic Acid, mg/kg: ".round($row["panthacdmg"],2)."<br>";
echo "Folic Acid, mg/kg: ".round($row["folacdmg"],2)."<br>";
echo "Biotin, mg/kg: ".round($row["biotmg"],3)."<br>";
echo "Niacin, mg/kg: ".round($row["miacinmg"],2)."<br>";
echo "Choline, mg/kg: ".round($row["cholmg"],2)."<br>";
echo "Cobalamin (B<sub>12</sub>), mg/kg: ".round($row["cianocobalmg"],3)."<br>";
echo "</div>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "TRACE MINERALS "."<br>"." supplementary levels:"."<br>";
echo "Cu, mg/kg: ".round($stashcumgsupp,2)."<br>";
echo "I, mg/kg: ".round($stashimgsupp,2)."<br>";
echo "Fe, mg/kg: ".round($stashfemgsupp,2)."<br>";
echo "Mn, mg/kg: ".round($stashmnmgsupp,2)."<br>";
echo "Zn, mg/kg: ".round($stashznmgsupp,2)."<br>";
echo "Se, mg/kg: ".round($stashsemgsupp,2)."<br>";
echo "</div>";
echo "<div style='width:300px;height:280px;margin:6px;padding:6px;border:1px solid black;background-color:lightgray;'>";
echo "VITAMINS "."<br>"." supplementary levels:"."<br>";
echo "A, IU: ".round($stashvitaiusupp,3)."<br>";
echo "D<sub>3</sub>, IU: ".round($stashvitdiusupp,3)."<br>";
echo "E, IU: ".round($stashviteiusupp,3)."<br>";
echo "K, mg/kg: ".round($stashvitkiusupp,3)."<br>";
echo "Thiamin, mg/kg: ".round($stashthiaminmgsupp,3)."<br>";
echo "Riboflavin, mg/kg: ".round($stashriboflavinmgsupp,3)."<br>";
echo "Niacin, mg/kg: ".round($stashmiacinmgsupp,3)."<br>";
echo "Pantothenic acid, mg/kg: ".round($stashpanthacdmgsupp,3)."<br>";
echo "Choline, mg/kg: ".round($stashcholmgsupp,3)."<br>";
echo "B<sub>12</sub>, mg/kg: ".round($stashcianocobalmgsupp,3)."<br>";
echo "</div>";
echo "</div>";
}
} else {
echo "0 results";
}
$conn->close();//closed requirement overview connection

// Create connection for updating table reqslctd where the selected requirements will be stored
$connn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connn->connect_error) {
  die("Connection failed: " . $connn->connect_error);
}

$sqll = "UPDATE reqslctd SET targetliveweight='$stashtargetliveweight', agedaysrange='$stashagedaysrange', energykcal='$stashenergykcal', energymj='$stashenergymj', cpproc='$stashcpproc', metproc='$stashmetproc', metcysproc='$stashmetcysproc', lysproc='$stashlysproc', thrproc='$stashthrproc', tryproc='$stashtryproc', argproc='$stashargproc', valproc='$stashvalproc', leuproc='$stashleuproc', isoproc='$stashisoproc', hisproc='$stashhisproc', phenproc='$stashphenproc', calcproc='$stashcalcproc', phosavlbproc='$stashphosavlbproc', naproc='$stashnaproc', mnmg='$stashmnmg', femg='$stashfemg', cumg='$stashcumg', znmg='$stashznmg', img='$stashimg', semg='$stashsemg', vitaiu='$stashvitaiu', vitdiu='$stashvitdiu', viteiu='$stashviteiu', vitkiu='$stashvitkiu', thiaminmg='$stashthiaminmg', riboflavinmg='$stashriboflavinmg', pyridoxmg='$stashpyridoxmg', panthacdmg='$stashpanthacdmg', folacdmg='$stashfolacdmg', biotmg='$stashbiotmg', miacinmg='$stashmiacinmg', cholmg='$stashcholmg', cianocobalmg='$stashcianocobalmg' WHERE id=1";

if ($connn->query($sqll) === TRUE) {
echo "";
} else {
echo "Error updating record: " . $connn->error;
}

$connn->close();//closing update conection
?>

