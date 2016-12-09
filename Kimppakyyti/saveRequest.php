<?php
    session_start();
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

<!-- konmentti -->
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
    $datat['Lpaikka'] = $_POST['givenRdeparture'];
    $datat['Spaikka'] = $_POST['givenRarrival'];
    $datat['Pvm'] = $_POST['givenRdate'];
    $datat['Laika'] = $_POST['givenRtime'];
    $datat['Paikat'] = $_POST['givenRseats'];

    
    //talletetaan kantaan
    
        try{
            $stm = $DBH->prepare("INSERT INTO kk_request (Rdeparture, Rarrival, Rdate, Rtime, Rseats) VALUES(:Lpaikka,:Spaikka,:Pvm,:Laika,:Paikat);");
            if($stm->execute($datat)){
                //Annetut tiedot sessiotaulukkoon
                //$_SESSION['fname'] = $datat['fname'];
                //$_SESSION['lname'] = $datat['lname'];
                //$_SESSION['email'] = $datat['email'];
                //$_SESSION['viesti'] = "Pyyntö lähetetty " . $datat['fname'];

                //redirect("index.php");
            }else{


                //redirect("index.php");
            }
        }catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //. $e.getMessage();



            //redirect("index.php");
        }
    }



?>


    <body>
    
        <main>
            
            <section>
                <div class="form-style-6">
                    <br><br><br>
                    <h1>Pyyntösi on nyt tallennettu</h1>
                    <a href="luo-pyynto.php"><input type="button" value="Pyydä toinen kyyti" /></a>
                    <a href="luo-pyynto.php"><input type="button" value="Etsi kyytitarjouksia" /></a>
				</div>
            
            
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 