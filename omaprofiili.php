<?php
	include	"tietokanta.php";
	include "todentaminen.php";
?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="AtteDrinkkiarkisto.css">
<title>Oma profiili</title>
<style>
.wrapper {
			margin-top: 150px; 
			width: 500px;
			margin-left: auto;
			margin-right: auto;
			color: white;
		}

		table, tr{
			margin-left: auto;
			margin-right: auto;
			border: solid 3px black;
		}
		td {
			border: solid black 1px;
		}
</style>
</head>

<body LINK="#1FOOFF" VLINK= "#000000"; >
  <div class="container">
		<form action="edit.php" methot="post">
		<button class="btn btn-default" style="float: right:" name= 
		"submit1" type="submit">Muokkaa</button>
		</form>
		
		<div class="wrapper">
		<?php
		if(isset($_POST['submit1'])) {
			?>
			<scipt type="text/javascript">
				window.location:"edit.php"
			</script>
			<?php
		}
  <div id="sailio">

  <h1>Drinkkiarkisto</h1>

  <nav>

<div id="Drinkkilista"><a href="reseptilista.html">Reseptilista</div>
<div id="Etusivu"><a href="etusivu.html">Etusivu</div>
</nav>

  <h2>Omat tiedot</h2>
$q=mysqli_query($con, "SELECT * FROM kayttaja WHERE kayttajatunnus='$_SESSION[kayttajatunnus]';");
			
			?>
			<h2 style="text-align: center;">Profili</h2>
			<?php
			$row=mysqli_fetch_assoc($q);
			?>
			<br>
			<div style="text-align: center;"><b>Tervetuloa</b>
			<h3>
			<?php
				echo $_SESSION['kayttajatunnus'];
			?>
			</h3>
			</div>

			<?php
				echo "<b>";
				echo "<table class='table table-bordered'>";
				
				echo "<tr>";
					echo "<td>";
						echo "<b> Käyttäjänimi: </b>";
					echo "</td>";

					echo "<td>";
						echo $row['kayttajatunnus'];
					echo "</td>";
				echo "</tr>";

				echo "<tr>";
					echo "<td>";
					echo "<b> Sähkäposti: </b>";
					echo "</td>";

					echo "<td>";
						echo $row['sahkoposti'];
					echo "</td>";
				echo "</tr>";

				//echo "<tr>";
				//	echo "<td>";
				//	echo "<b> Salasana: </b>";
				//	echo "</td>";
				//
				//	echo "<td>";
				//		echo $row['password'];
				//	echo "</td>";
				//echo "</tr>";
			// Salasanan näyttäminen mielestäni turhaa...
				echo "</table>";
				echo "</b>";
			?>
		</div>
	</div>
 
</div>
  </div>
</body></html>
