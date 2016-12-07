<?php
    session_start();
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
        <section>
<?php
    //Lomakkeen syöttötiedot $data[] taulukossa
    $data = $_POST['data'];
    //Laitetaan syötetyt tiedot sessioon jemmaan, jotta voidaan palata muuttamaan
    $_SESSION['givenData'] = serialize($data);

    //nimi ja email oikein? tarkistus palvelimella
    if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)) { //valmis php funktio
        if(preg_match("/^[a-öA-Ö]*$/",$data['lname'])) { //sallitaan kirjaimia ja välilyöntejä
            //* on "useita" ja ^ on "täytyy alkaa"
            
                echo '<div class="tiedot">';
                    echo 'Nimi: '.$data['fname'].' '.$data['lname'] ."<br>";
                    echo 'Sähköposti: '.$data['email'] ."<br>";
                    echo 'Puhelinnumero: '.$data['phone'] ."<br>";
                    echo 'Syntymäaika: '.$data['bday'] ."<br>";
                    echo 'Sukupuoli: '.$data['sex'] ."<br>";
                    echo '</div>';
                    echo '<a href="saveUser.php">Tallenna</a>';
        }else{
            echo("<p>Sukunimessä sallittu vain kirjaimet ja välilyönnit!<br/>".$data['lname']."</p>");
        }
        echo '<a href="register.php">Takaisin</a>';
    }else{
            echo("<p>Sähköposti muodossa example@example.com<br>".$data['email']."</p>");
    }
?>
        </section>
    </body>
</html>