<?php
    session_start();
?>
<!doctype html>
<!--tee rekisteröitymislomake, jonka suvi jo teki hahaa-->

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
				    <h1>Luo tarjous</h1>
                    <br>
						<form method="POST" action="saveOffer.php">
							<input type="text" name="givenOdeparture" placeholder="Lähtöpaikka" required/>
							<input type="text" name="givenOarrival" placeholder="Saapumispaikka" required/>
                            <input type="date" name="givenOdate" placeholder="Päivämäärä pv.kk.vvvv" required/>
                            <input type="time" name="givenOtime" placeholder="Lähtöaika" />
                            <input type="text" name="givenOprice" placeholder="Hinta /hlö" />
							<input type="text" name="givenOseats" placeholder="Vapaiden paikkojen määrä" required/>
                            <input type="text" name="givenOcar" placeholder="Auton malli" required/>
							<input type="submit" name="save" value="Luo tarjous" />
                            <input type="reset" value="Nollaa tiedot" />
						</form>
                    <script>
                        var salasana = document.querySelector('input[name="givenPassword"]');
                        var varmistus = document.querySelector('input[name="givenPassword2"]');
                        console.log(varmistus);
                        var fillPattern = function(){
                                varmistus.pattern = salasana.value;
                            }
                        salasana.addEventListener('keyup', fillPattern);
                    </script>
				</div>
            
            
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>