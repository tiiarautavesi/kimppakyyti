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
                            include_once("includes/header.php");
                    ?>
		    	    
                </ul>
            </nav>
    </header>

<main>
            
    <section>
        <div class="form-style-6">
            <h1>Kirjaudu sisään</h1>
            <br>
            <form method="POST" action="loggingIn.php">
                <input type="email" name="givenEmail" placeholder="Sähköposti" required/>
                <input type="password" name="givenPassword" placeholder="Salasana" required/>
				<input type="submit" name="login" value="Kirjaudu" />
                <a href="register.php"><input type="button" value="Etkö ole vielä jäsen? Rekisteröidy" /></a>
            </form>
        </div>
    </section>
              
</main>
</body>
<footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>