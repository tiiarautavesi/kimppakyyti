<?php
    session_start();
    session_destroy();
?>
<!doctype html>
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
                    <?php
                    echo $_SESSION['loggedin'];
                        if($_SESSION['loggedin'] == 'yes'){
                            echo"<h3>Uloskirjautuminen epäonnistui";
                        } else {
                            echo"<h1>Olet nyt kirjautunut ulos</h1>";
                        }
                    ?>
                    <br><br><br>
						<form>
                            <a href="logIn.php"><input type="button" value="Kirjaudu sisään" /></a>
                            <a href="index.php"><input type="button" value="Etusivulle" /></a>
						</form>
				</div>
            
            
            </section>
            <section>
	      		<h1>Viimeisimmät Kyytitarjoukset</h1>
	      	</section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html> 