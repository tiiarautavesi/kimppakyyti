<!doctype html>
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
        <title>KIMPPAKYYTI</title> 
        

        
    </head>

<?php


SSLon();
//Tänne tullaan kun logIn.php lomakkeella painetaan Kirjaudu painiketta
//Kayttaja/salasana kannassa?
//user oliossa kayttajatiedot jos ok, muuten false
if(isset($_POST["login"])){
    $user = login($_POST['givenEmail'], $_POST['givenPassword'], $DBH);
    //print_r($user);
        if(!$user){
            $_SESSION['loginerror'] = 'Kirjautuminen epäonnistui';
            //Aiheuttaa alert() pääsivulla
            redirect("index.php"); 
        } else {
            unset($_SESSION['loginerror']);
            //Jos käyttäjätunnistettiin, talletetaan tiedot sessioon esim. kassalle siirtymistä
            //varten on hyvä tietää asiakastiedot
            $_SESSION['loggedin'] = 'yes';
            $_SESSION['fname'] = $user->fname;
            $_SESSION['lname'] = $user->lname;
            $_SESSION['email'] = $user->email;
            $_SESSION['phone'] = $user->phone;
            $_SESSION['bdate'] = $user->bdate;
            $_SESSION['sex'] = $user->sex;
            //print_r($_SESSION);
            //Jos loggaus onnistuu niin palataan paasivulle
            redirect(“index.php”);
        }

}
?>


    <body>
    
        <main>
            
            <section>
                <div class="form-style-6">
				    <h1>Kirjaudutaan sisään...</h1>
                    
				</div>
            </section>
        </main>
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 