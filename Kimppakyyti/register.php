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
                                include_once("includes/header.php");
                        ?>

                    </ul>
                </nav>
        </header>
    
        <main>
            
            <section>
                <div class="form-style-6">
				    <h1>Rekisteröityminen</h1>
                    <br>
						<form method="POST" action="saveUser.php">
							<input type="text" name="givenFname" placeholder="Etunimi" required/>
							<input type="text" name="givenLname" placeholder="Sukunimi" required/>
                            <input type="email" name="givenEmail" placeholder="Sähköposti" required/>
                            <input type="password" name="givenPassword" placeholder="Salasana" required/>
                            <input type="password" name="givenPassword2" placeholder="Salasana uudestaan" required/>
                            <input type="text" name="givenPhone" placeholder="Puhelinnumero" required/>
                            <input type="date" name="givenBday" placeholder="Syntymäaika pv.kk.vvvv" required/>
                            <select name="givenSukupuoli">
                            <option label="Mies" value="mies">Mies</option>
                            <option label="Nainen" value="nainen">Nainen</option>
                            <option label="Muu" value="muu">Muu</option>
                            </select>
							
							<input type="submit" name="save" value="Rekisteröidy" />
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