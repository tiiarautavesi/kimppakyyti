<!--mitä käyttäjä näkee rekisteröidyttyään? ehkä meille sopis, että näkyy sama sivu, mutta eri "oikeuksilla"-->
<html>
<header>
    <nav>
        <ul>
            <?php
            include_once("includes/header.php");
            ?>
        </ul>
    </nav>
</header>

    <head>
    <meta charset="utf-8">
        <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <title>KIMPPAKYYTIdffdgdf</title> 
        

        
    </head>

<?php

if(isset($_POST["save"])){ //Onko painettu submit painiketta?
    //Tallennetaan annetut arvot assosiatiiviseen taulukkoon JEE
    $datat['email'] = $_POST['givenEmail'];
    $datat['password'] = hash('sha256', $_POST['givenPassword']."kiv"); //kiv on suolaa
    $datat['fname'] = $_POST['givenFname'];
    $datat['lname'] = $_POST['givenLname'];
    $datat['phonenumber'] = $_POST['givenPhone'];
    $datat['bdate'] = $_POST['givenBday'];
    $datat['sex'] = $_POST['givenSukupuoli'];
    
    //talletetaan kantaan
    
    if(filter_var($datat['email'], FILTER_VALIDATE_EMAIL)){
        //var_dump($datat);
        try{
            $stm = $DBH->prepare("INSERT INTO kk_person (email, pword, fname, lname, phonenumber, bdate, sex) VALUES(:email,:password,:fname,:lname,:phonenumber,:bdate,:sex);");
            if($stm->execute($datat)){
                //Annetut tiedot sessiotaulukkoon
                //$_SESSION['fname'] = $datat['fname'];
                //$_SESSION['lname'] = $datat['lname'];
                //$_SESSION['email'] = $datat['email'];
                $_SESSION['viesti'] = "Nyt voit kirjautua " . $datat['fname'];
                echo'save46';
                //redirect("index.php");
            }else{

                //redirect("index.php");
            }
        }catch(PDOException $e){
            $_SESSION['viesti'] = "Tietokantaongelma"; //. $e.getMessage();

            //redirect("index.php");
        }
    }
}

?>


    <body>
    
        <main>
            
            <section>
                <div class="form-style-6">
				    <h1>Rekisteröityminen onnistui</h1>
                    <br>
						<form>
                            <a href="index.php"><input type="button" value="Etsi kyytejä" /></a>
                            <a href="profile.php"><input type="button" value="Tarkastele profiiliasi" /></a>
						</form>
				</div>
            
            
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 