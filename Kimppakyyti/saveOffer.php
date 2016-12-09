<?php
    session_start();
error_reporting(E_ALL);
?>
<header>
    <nav>
        <ul>
            <?php
            if ($_SESSION['loggedin'] == 'yes') {
                include_once("includes/loggedin_header.php");
            }else{
                include_once("includes/header.php");
            };
            ?>
        </ul>
    </nav>
</header>
<!-- komentti -->
<html>
    <head>
    <meta charset="utf-8">
        <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <title>KIMPPAKYYTI</title> 
        

        
    </head>

<?php

if(isset($_POST["save"])){ //Onko painettu submit painiketta?
    //Tallennetaan annetut arvot assosiatiiviseen taulukkoon JEE
    $datat['OLpaikka'] = $_POST['givenOdeparture'];
    $datat['OSpaikka'] = $_POST['givenOarrival']; 
    $datat['OPvm'] = $_POST['givenOdate'];
    $datat['OLaika'] = $_POST['givenOtime'];
    $datat['OHinta'] = $_POST['givenOprice'];
    $datat['OPaikat'] = $_POST['givenOseats'];
    $datat['OAuto'] = $_POST['givenOcar'];
    //print_r($datat);
    //talletetaan kantaan
    
        try{
            $stm = $DBH->prepare("INSERT INTO kk_offer (Odeparture, Oarrival, Odate, Otime, Oprice, Oseats, Ocar) VALUES(:OLpaikka,:OSpaikka,:OPvm,:OLaika,:OHinta,:OPaikat,:OAuto);");
            if($stm->execute($datat)){
                //Annetut tiedot sessiotaulukkoon
                //$_SESSION['fname'] = $datat['fname'];
                //$_SESSION['lname'] = $datat['lname'];
                //$_SESSION['email'] = $datat['email'];
                //$_SESSION['viesti'] = "Tarjous jätetty " . $datat['fname'];
                echo'save46';
                //redirect("index.php");
            }else{
                echo'save56';
                //redirect("index.php");
            }
        }catch(PDOException $e){
            echo "Tietokantaongelma " . $e.getMessage();
            echo'save62';

            //redirect("index.php");
        }
    }

?>


    <body>
        <main>
            
            <section>
                <div class="form-style-6">

				</div>
            </section>
     
        
        </main>
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 