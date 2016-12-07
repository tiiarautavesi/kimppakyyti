<?php
    session_start();
?>
<!DOCTYPE html>

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
	      		
		      		
		      		<div class="profile">
						<h1>Oma profiilisi</h1>
						<div id="photo"></div>
                         <!--siis toi header ei nyt oikee toimi täl sivul??-->
                        
                            <?php
                                echo '<div class="tiedot">';
                                echo 'Nimi: '.$_SESSION['fname'].' '.$_SESSION['lname'];
                                echo '<br>';
                                echo 'Sähköposti: '.$_SESSION['email'];
                                echo '<br>';
                                echo 'Puhelinnumero: '.$_SESSION['phone'];
                                echo '<br>';
                                echo 'Sukupuoli: '.$_SESSION['sex'];
                                echo '</div>';
                                ?>
                        
                    
					</div> 
	      		       
	      	</section>

	      	<section>
	      		<h3>Tarkastele viimeisiä tarjouksiasi ja pyyntöjäsi</h3>
	      	</section>

	    </main>

    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>