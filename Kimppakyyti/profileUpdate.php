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
                  
                      
                      <div class="form-style-6">
                        <br><br>
                        <h1>Päivitä tietoja</h1><br /><p>Täytä vain ne kentät, joiden tietoja haluat muuttaa</p>
                        <br><br>
                            <form method="POST" action="saveUpdate.php">
                            <input type="text" name="givenFname" placeholder="Uusi etunimi" />
                            <input type="text" name="givenLname" placeholder="Uusi sukunimi" />
                            <input type="password" name="givenPassword" placeholder="Uusi salasana"/>
                            <input type="password" name="givenPassword2" placeholder="Uusi salasana uudestaan"/>
                            <input type="text" name="givenPhone" placeholder="Uusi puhelinnumero" />
                            <select name="givenSukupuoli">
                            <option label="Mies" value="mies">Mies</option>
                            <option label="Nainen" value="nainen">Nainen</option>
                            <option label="Muu" value="muu">Muu</option>
                            </select>
                            
                            <input type="submit" name="update" value="Tallenna tiedot" />
                            <a href="profile.php"><input type="submit" value="Takaisin" /></a>
                        </form>
                    
                    </div> 
                         
              </section>


              <section>
                  <h3>Tarkastele viimeisiä tarjouksiasi ja pyyntöjäsi</h3>
              </section>


        </main>


    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>
