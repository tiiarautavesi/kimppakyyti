<?php
    require_once("config/config.php");
    SSLon();

/*
*
*näytetään reikisteröinti, kirjaudu tai kirjautuneen käyttäjätieto
*
*/
//oletuksena nyt rekisteröinti
?>

    <li><a href="kyytitarjoukset.php">Kyytitarjoukset</a></li>
	<li><a href="kyytipyynnot.php">Kyytipyynnöt</a></li>
    <li style="float:right; margin:auto"><a href="profile.php"><i class="fa fa-user-circle-o fa-2x"></i></a></li>
    <li style="float:right; margin:auto"><a href="profile.php">Profiili</a></li>
	<li style="float:right; margin:auto"><a href="logOut.php" name="logout">Kirjaudu ulos</a></li>

<?php
    //kirjaudu ulos -> tuhotaan sessio -> logOut.php   
    if(isset($_POST['logout'])){
        unset($_SESSION['loggedin']);
        redirect("logOut.php");
    }
?>