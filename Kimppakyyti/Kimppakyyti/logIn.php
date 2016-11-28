<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <title>KIMPPAKYYTI</title> 
    </head>
    
<body>
    <header>
    <aside><img src="img/purilainen2.png"></aside>
        <h2>Sisäänkirjautuminen</h2>
        <nav>
            <ul>
                <li>Kyytitarjoukset</li>
                <li>Kyytipyynnöt</li>
                <li><a href="register.php">Rekisteröidy</a></li>
            </ul>    
        </nav>
    </header>
    
    <main>
        <section>
            <div class="form-style-6">
            <h1>Sisäänkirjautuminen</h1>
                <?php
                    if ($_POST['login']){
                        if($_POST['email'] && $_POST['password']){
                            $email = mysql_real_escape_string($_POST['email']);
                            $password = mysql_real_escape_string(hash("sha512", $_POST['password']));
                            $user = mysql_fetch_array(mysql_query("SELECT * FROM kk_person WHERE email='$email''"));
                            if ($email == 0) {
                                echo("Sähköpostia ei ole olemassa<br><a href='register.php'>Rekisteröidy!</a>");
                            }
                            $suola = hash("sha512", rand() . rand() . rand());
                            setcookie("c_email", hash("sha512", $email), time() + 24*60*60, "/");
                            setcookie("c_email", $suola, time() + 24*60*60, "/");
                            $userID = $user['ID'];
                            mysql_query("UPDATE kk_person SET pword='$suola' WHERE Pid='$userID'");
                            echo 'You are now logged in!';
                        }
                    }
                ?>
                <form method="POST">
                    <input type ="email" name="email" placeholder="Sähköpostiosoite" required />
                    <input type="password" name="password" placeholder="Salasana" required />
                    <input type="submit" name="login" value="Kirjaudu sisään" />
                </form>
                <p>Puuttuuko tunnukset?</p><br />
                <span><a href="register.php">Rekisteröidy!</a></span>
            </div>
        </section>
        
        <section>
        <h3>Mainos?</h3>
        </section>
    
    </main>
    
    </body>


</html>