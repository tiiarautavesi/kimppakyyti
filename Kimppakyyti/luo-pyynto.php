<?php
    session_start();
?>
<!doctype html>
<!--pyynnöt tietokantaan, tagaa myös pyynnön luoja-->

<html>
    <head>
    <meta charset="utf-8">
        <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <title>KIMPPAKYYTI</title> 
        

        
    </head>
    <body>
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
    
        <main>
            
            <section>
                <div class="form-style-6">
				    <h1>Luo kyytipyyntö</h1>
                    <br>
						<form method="POST" action="saveRequest.php">
							<input type="text" name="givenRdeparture" placeholder="Lähtöpaikka" required/>
                            <input type="text" name="givenRarrival" placeholder="Saapumispaikka" required/>
                            <input type="date" name="givenRdate" placeholder="Päivämäärä pv.kk.vvvv" required/>
                            <input type="time" name="givenRtime" placeholder="Lähtöaika" />
                            <input type="text" name="givenRseats" placeholder="Tarvittavien paikkojen määrä" required/>
                            <input type="submit" name="save" value="Luo pyyntö" />
                            <input type="reset" value="Nollaa tiedot" />

						</form>
				</div>
            
            
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>