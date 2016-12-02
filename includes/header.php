<?php

require_once("config/config.php");
SSLon();

echo($_SESSION['viesti']);
//Näytetään rekisteröinti, kirjaudu tai kirjautuneen käyttäjän tietoa 

//Oletuksena nyt rekisteröinti

?>


    <li><a href="kyytitarjoukset.php">Kyytitarjoukset</a></li>
	<li><a href="kyytipyynnot.php">Kyytipyynnöt</a></li>
    <li style="float:right; margin:auto"><a href="profile.php"><i class="fa fa-user-circle-o fa-2x"></i></a></li>
    <li style="float:right; margin:auto"><a href="logIn.php">Log in</a></li>
	<li style="float:right; margin:auto"><a href="register.php">Register</a></li>
    