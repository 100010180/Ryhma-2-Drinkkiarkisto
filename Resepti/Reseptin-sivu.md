<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css.css">
<title>Drinkkiarkisto</title>
<style>
body {
	background-image: url("tausta.jpg");
	background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

#valikko {
	font-size: 25px;
}

table, th, td {
    border: 1px solid #484848;
	background-color: #b3b3b3;
	font-size: 18px;
	word-break: break-word;
}

th {
	background-color: #404040;
	color: 	#e6e6e6;

}

td {
	padding: 5px;
}

table {
	display: inline-block;
	width: auto;
	max-width: 50%;
	margin-right: 10px;
	border-collapse: collapse;
	margin: 10px;
	margin-right: 180px;
}

.lisaadrinkki {
	border-style: solid;
	border-width: 2px;
	border-radius: 10px;
	text-align: left;
	padding: 3px;
	width: 21%;
	background-color: #b3b3b3;
	display: inline-block;
	float: left;
	margin-bottom: 20px;
	margin-right: 5px;
	margin-top: 20px;
}

*:focus {
    outline: none;
}

.haedrinkki {
	margin: auto;
	text-align: center;
	padding: 10px;
}

#hae {
	float: right;
	background-color: #b3b3b3;
	border: 2px solid;	
	padding: 3px;
	text-align: center;
	border-radius: 9px;
	margin-right: 5px;
	margin-top: 20px;
}

textarea {
	display: inline-block;
	width: auto;
	max-width: 90%;
	min-width: 90%;
	max-height: 90px;
	min-height: 90px;
	border: 2px solid black;
	border-radius: 10px;
}

input {
	display: inline-block;
	border: 2px solid black;
	border-radius: 10px;
}

input[id=nimi],[id=juomalaji],[id=ainesosat] {
    width: 50%;
}

.lisaadrinkki > input {
	width: 50%;
}
</style>
</head>
<body>

<h1>Drinkkiarkisto</h1>

<nav class="sub">
  <ul>
  <li><a href="profiili.php">Profiili</a></li>  
  <li><a href="etusivu.php">Etusivu</a></li>
  <li><a href="lista_resepteista.php">Reseptit</a></li> 
</ul>
</nav>
<br>

<div id="hae">
<p>Hae drinkkiä nimeltä:</p>

<form action="" method="post">
	<input type="text" name="Nimi" /><br><br>
	<input style="float:right; width:60px;" type="submit" value="Hae" name="hae" /><br><br>
</form>
</div>
<!-- Lisää drinkkejä -->
<div class= "lisaadrinkki">

<h3>Lisää drinkki</h3>

<h4>Syötä drinkin tiedot:</h4>
<form name="lomake" method="post">

	<span class="class_nimi" style="color:black">Drinkin nimi:</span>
	<input type="text" name="nimi" id="nimi" required><br><br>
	
	<span class="class_juomalaji" style="color:black">Drinkin juomalaji:</span>
	<input type="text" name="juomalaji" id="juomalaji" required><br><br>
	
	<span class="class_ainesosat" style="color:black">Drinkin ainesosat:</span>
	<input type="text" name="ainesosat" id="ainesosat" required><br>
	
	<p>Drinkin valmistusohje:</p>
	<textarea rows="4" cols="45" name="ohje"></textarea>
	<br><br>
	
	<button type="submit" input type="submit" id="lisays" value="submit" style="margin-left:2px;">Lisää drinkki</button>
</form>


<?php
$nimi = $_POST["nimi"]?? '';
$juomalaji = $_POST["juomalaji"]?? '';
$ainesosat = $_POST["ainesosat"]?? '';
$ohje = $_POST["ohje"]?? '';
$id = uniqid('', true);
$idd = substr($id, strlen($id) - 4, strlen($id));

$server = "localhost";
$username = "root";
$password = "";
$dbname = "drinkkiarkisto";

$yhteys = new mysqli($server, $username, $password, $dbname);

if (!$yhteys) {
	die("Yhteyden muodostaminen ei onnistu! " . $yhteys -> connect_error);
}

mysqli_set_charset($yhteys, "utf8");

$sql = "INSERT INTO resepti (Resepti_id, Nimi, Juomalaji, Ainesosat, Valmistusohje)
VALUES ('$idd', '$nimi', '$juomalaji', '$ainesosat', '$ohje')";

if (empty($nimi)) {
	echo "<font color='#b3b3b3', align='center'>Kirjoita nimi</font>";
}

elseif ($yhteys -> query($sql) === TRUE){
	echo "<font color='#b3b3b3', align='center'>Tiedot lisätty</font>";
}

elseif ($nimi === $nimi){
	echo "<font color='#b3b3b3', align='center'>Drinkki on jo lisätty</font>";
}

else {
	echo "Virhe " . $sql. "<br>"  .$yhteys->error;
}

?>
</div>

<div class="kaikkitaulukko">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drinkkiarkisto";

// Luo yhteys
$conn = new mysqli($servername, $username, $password, $dbname);
// Tarkista yhteys
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Nimi, Juomalaji, Ainesosat, Valmistusohje FROM resepti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "";
    // Tiedot ulos
    while($row = $result->fetch_assoc()) {
        echo "";    }
    echo "</table>";
} else {
    echo "0 tulosta";
}

$conn->close();
?>
</div>



<!-- Hae drinkkejä -->
<div class= "haedrinkki">

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "drinkkiarkisto";

$yhteys = new mysqli($server, $username, $password, $dbname);

if ($yhteys -> connect_error) {
	die("Yhteyden muodostaminen ei onnistu! " . $yhteys -> connect_error);
}

mysqli_set_charset($yhteys, "utf8");

$hakusql = "SELECT Nimi, Juomalaji, Ainesosat, Valmistusohje FROM resepti";

if(isset($_POST["hae"])) {

$Nimi = $yhteys -> real_escape_string($_POST['Nimi']);

$hakusql = $hakusql . " where Nimi like '$Nimi%'";
}

$tulos = $yhteys->query($hakusql);

if ($tulos->num_rows > 0) {
	echo "<center><table><tr><th>Drinkin nimi</th><th>Drinkin juomalaji</th><th>Drinkin ainesosat</th><th>Drinkin valmistusohje</th></tr></center>";
    while($row = $tulos->fetch_assoc()) {
        echo "<tr><td style='width: 250px'>" . $row["Nimi"]. "</td><td style='width: 250px'>" . $row["Juomalaji"]. "</td><td style='width: 250px'>" . $row["Ainesosat"]. "</td><td style='width: 250px'>" . $row["Valmistusohje"]. "</td></tr>";
    }
    }
	else {
        echo "<font color='black'>Haku ei tuottanut tuloksia.</font>";
    }

$yhteys->close();
?>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>
