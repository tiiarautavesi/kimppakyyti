<?php
    session_start();
?>
<html>
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
    <head>
    <meta charset="utf-8">
        <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <title>KIMPPAKYYTI</title> 
        


        
    </head>


    <?php


    if(isset($_POST["update"])){ //Onko painettu submit painiketta?
        if ($_POST['givenFname'] == null){ //jos kenttä on jätetty tyhjäksi, päivitetään käynnissä olevan session tieto, muuten se mitä kentässä lukee
            $updatet['fname'] = $_SESSION['fname'];
        }else{
            $updatet['fname'] = $_POST['givenFname'];
        }
        if ($_POST['givenLname'] == null){
            $updatet['lname'] = $_SESSION['lname'];
        }else{
            $updatet['lname'] = $_POST['givenLname'];
        }
        if ($_POST['givenPhone'] == null){
            $updatet['phone'] = $_SESSION['phone'];
        }else{
            $updatet['phone'] = $_POST['givenPhone'];
        }

        //talletetaan kantaan
            try{
                $stm = $DBH->prepare("UPDATE TABLE kk_person SET(fname=:fname, lname=:lname, phone=:phone) WHERE (Pid = $_SESSION['Pid']);");
                if($stm->execute($updatet)){
                    $_SESSION['viesti'] = "Päivitys onnistui!";
                    echo"save57";
                    //redirect("index.php");
                }else{
                    $_SESSION['viesti'] = "Päivitys ei onnistunut";
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


            </section>


        </main>


    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 
