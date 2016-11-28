<?php
include("includes/iheader.php");
?>

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
            <h2>Rekisteröityminen</h2>
            <nav>
                <ul>
                    <li>Kyytitarjoukset</li>
		    		<li>Kyytipyynnöt</li>
		    		<li><a href="logIn.php">Log in</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            
            <section>
                <div class="form-style-6">
						<h1>Rekisteröityminen</h1>
                    
                            <?php
                                if ($_POST['email'] && $_POST['password']){
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $email = mysql_real_escape_string($_POST['email']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $bday = mysql_real_escape_string($_POST['bday']);
        $sex = mysql_real_escape_string($_POST['sex']);
        $password = mysql_real_escape_string(hash("sha512", $_POST['password']));
        $check = mysql_fetch_array(mysql_query("SELECT * FROM kk_person WHERE email='$email''"));
        if ($check != '0'){
            echo "Tämä sähköpostiosoite on jo käytössä";
        }
    $suola = hash("sha512", rand(). rand(). rand());
    mysql_query("INSERT INTO kk_person (email, pword, fname, lname, phonenumber, bdate, sex) VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$bday', '$sex')");
        setcookie("c_email", hash("sha512", $email), time() +24*60*60, "/");
        setcookie("c_suola", $suola, time() + 24*60*60, "/");
        echo"Käyttäjäsi on luotu ja olet kirjautunut sisään";
    }
                            ?>
                    
                    
                            <form method="POST">
						          <input type="text" name="fname" placeholder="Etunimi" required/>
                                    <input type="text" name="lname" placeholder="Sukunimi" required/>
                                    <input type="email" name="email" placeholder="Sähköposti" required/>
                                    <input type="password" name="password" placeholder="Salasana" required/>
                                    <input type="text" name="phone" placeholder="Puhelinnumero" required/>
                                    <input type="text" name="bday" placeholder="Syntymäaika pv.kk.vvvv" required/>
                                    <select name="sex">
                                    <option label="Mies" value="mies">Mies</option>
                                    <option label="Nainen" value="nainen">Nainen</option>
                                    <option label="Muu" value="muu">Muu</option>
                                    </select>
							
							<input type="submit" name="save" value="Rekisteröidy" />
						</form>
					</div>
            
            
            </section>
            
            <section>
            <h3>Mainos?</h3>
            </section>
        
        
        
        </main>
    
    
    
    
    
    
    </body>
</html>