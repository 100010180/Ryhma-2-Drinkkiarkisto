<?php 
$con = mysqli_connect("localhost","root","","drinkkiarkisto");
    if (mysqli_connect_errno())
    {
        echo "Yhteyden muodostaminen epäonnistui: " . mysqli_connect_error();
    }
    ?>