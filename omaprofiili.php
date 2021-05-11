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

 
</div>
  </div>
</body></html>
