<?php

require_once("config/config.php");
SSLon();

echo($_SESSION['viesti']);
//Näytetään rekisteröinti, kirjaudu tai kirjautuneen käyttäjän tietoa 

//Oletuksena nyt rekisteröinti

?>


    <li><a href="kyytitarjoukset.php">Kyytitarjoukset</a></li>
	<li><a href="kyytipyynnöt.php">Kyytipyynnöt</a></li>
    <li  style="float:right; margin:auto"><a href="register.php"><i class="fa fa-user-circle-o fa-2x"></i></a></li>