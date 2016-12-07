<?php
    require_once("config/config.php");

/*
*
*näytetään reikisteröinti, kirjaudu tai kirjautuneen käyttäjätieto
*
*/
//oletuksena nyt rekisteröinti
?>

    <li><a href="index.php">Kyytitarjoukset</a></li>
	<li><a href="kyytipyynnot.php">Kyytipyynnöt</a></li>
    <li style="float:right; margin:auto"><a href="?logout=true" name="logout"><i class="fa fa-sign-out "></i>
    <li style="float:right; margin:auto"><a href="profile.php"><i class="fa fa-user-circle-o "></i></a></li>
	
</a></li>

<?php
    //kirjaudu ulos -> tuhotaan sessio -> logOut.php   
    if(isset($_GET['logout'])){
        unset($_SESSION['loggedin']);
        redirect("logOut.php");
    }
?>