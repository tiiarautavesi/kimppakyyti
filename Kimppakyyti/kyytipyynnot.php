<!DOCTYPE html>

<html>
        <header>
            <nav>
                <ul>
                    <?php
                        include_once("includes/header.php");
                    ?>
		    	    
                </ul>
            </nav>
        </header>
    <head>
    <meta charset="utf-8">
        <link rel="icon" href="img/LOGO_sqr.png">
        <link rel="stylesheet" href="css/tyyli.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/haku.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
        <title>KIMPPAKYYTI</title>
    </head>
    <body>
	    

	    <main>
	      	
	      	<section>
	      		
		      		<img src="img/suurennuslasi.png" width="30%">
		      		<div class="form-style-6">
						<h1>Etsi matkustajia</h1>
						<form>
							<input type="text" name="field1" placeholder="Lähtöpaikka" />
							<input type="text" name="field2" placeholder="Määränpää" />
							<input type="date" placeholder="Päivämäärä" />
							<a href="luo-pyynto.php"><input type="button" value="Pyydä kyytiä" /></a>
                            <input type="submit" value="Etsi" />
						</form>
					</div>
	      		
	      	</section>

	      	<section>
	      		<h1>Viimeisimmät Kyytipyynnöt</h1>
	      	</section>

	    </main>

    </body>
    <footer><center> <i> © Kimppakyyti // 2016</i></center></footer>
</html>