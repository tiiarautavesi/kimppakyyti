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
        <title>KIMPPAKYYTI</title> 
        

        
    </head>

<?php

if(isset($_POST["save"])){ //Onko painettu submit painiketta?
    //Tallennetaan annetut arvot assosiatiiviseen taulukkoon JEE
    $requestdata['Rdeparture'] = $_POST['givenRdeparture'];
    $requestdata['Rarrival'] = $_POST['givenRarrival']; 
    $requestdata['Rdate'] = $_POST['givenRdate'];
    $requestdata['Rtime'] = $_POST['givenRtime'];
    $requestdata['Rseats'] = $_POST['givenRseats'];
    
    //talletetaan kantaan
    
    if(filter_var($requestdata['email'], FILTER_VALIDATE_EMAIL)){
        //var_dump($datat);
        try{
            $stm = $DBH->prepare("INSERT INTO kk_person (Rdeparture, Rarrival, Rdate, Rtime, Rseats) VALUES(:Rdeparture,:Rarrival,:Rdate,:Rtime,:Rseats);");
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

				</div>
            
            
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 