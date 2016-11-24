<!doctype html>
<?php
    include_once("includes/header.php");
    if(isset($_POST["login"])){
        $user = login($_POST["givenEmail"], $_POST["givenPassword"], $DBH)
            //mysteeriongelma, ratkaiskaa ihmeessä
        if($user){
            $_SESSION['loggedIn'] = "yes";
            $_SESSION['fname'] = $user->fname;
            $_SESSION['email'] = $user->email;
            unset($_SESSION['viesti']);
            redirect("index.php");
        }else{
            $_SESSION['viesti'] = "Väärä salasana tai sähköposti"
        }
    }else if (isset($_POST["cancel"])){
        unset($_SESSION['message']);
        redirect("index.php");
    }
    
?> 
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
        <aside><img src="img/purilainen2.png"></aside>
            <h2>Kirjautuminen</h2>
            <nav>
                <ul>
                    <li>Kyytitarjoukset</li>
		    		<li>Kyytipyynnöt</li>
		    		<li>Log in</li>
                </ul>
            </nav>
    </header>

<main>
            
    <section>
        <div class="form-style-6">
            <h1>Kirjaudu sisään</h1>
            <br>
            <form method="POST" action="saveUser.php">
                <input type="email" name="email" placeholder="Sähköposti" required/>
                <input type="password" name="password" placeholder="Salasana" required/>
				<input type="submit" value="Kirjaudu" />
                <a href="register.php"><input type="button" value="Etkö ole vielä jäsen? Rekisteröidy" /></a>
            </form>
        </div>
    </section>
              
</main>
</body>
<footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>