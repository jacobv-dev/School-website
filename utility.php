<!DOCTYPE html>

<html lang="cs">

    <head>
        <meta charset="UTF-8">
        <title>Jakub Vorel • Utility</title>
        <link rel="icon" type="image/png" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/man-raising-hand-light-skin-tone_1f64b-1f3fb-200d-2642-fe0f.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/styly.css">
        <script src="https://kit.fontawesome.com/d72c987b8b.js" crossorigin="anonymous"></script> <!-- Font Awesome Icons -->
        <link href='https://fonts.googleapis.com/css?family=Monoton|Comfortaa' rel='stylesheet'>
    </head>

    <body>

        <nav>
            <div class="logo">
                <a href="./">JAKUB VOREL</a>
            </div>
            
            <div class="menu-opener">
                <div class="menu-opener-line"></div>
                <div class="menu-opener-line"></div>
                <div class="menu-opener-line"></div>
            </div>
            
            <ul class="menu">
                <li><a href="./">Domů 🏠</a></li>
                <li><a href="./galerie.html">Galerie 🖼️</a></li>
                <li><a href="./zajimavosti.html">Zajímavosti 💡</a></li>
                <li><a class="active" href="./utility.php">Utility ⚙️</a></li>
            </ul>
        </nav>

        <section class="utility">

            <div class="nadpis"><p>Utility</p></div>

            <fieldset>
                <legend>Dnešní datum</legend>
                
                <?php
                    echo date("j. m. Y");
                ?>
            </fieldset>

            <fieldset>
                <legend>Čas spuštění skriptu</legend>
                
                <?php
                    echo date("H:i:s");
                ?>
            </fieldset>
			
			<fieldset>
			  <legend>Funkce Time( )</legend>
			  
              <?php
				  $s = time(); //aktuální čas v sekundách běžící od 1.1.1970
				  echo "Aktuální počet sekund od 1. 1. 1970 = ".number_format($s,0,","," ");
			  ?>
			</fieldset>
			
			<fieldset>
			  <legend>Počet dnů do konce školního roku - 30. 6. <?php echo date("Y"); ?></legend>
			  
              <?php
			  	$aktrok = date("Y"); //Aktuální rok (2021)
				$dnes = date("U"); //aktuální čas v sekundách běžící od 1.1.1970
				$cil = mktime(0,0,0,6,30,$aktrok); //čas v budoucnu (vyjádřený v sekundách od 1.1.1970), funkce mktime nastavuje hod, min, sec, měs, den a rok
				$rozdil = $cil - $dnes; //časový úsek v sek mezi 2 událostmi
				$dny = $rozdil/86400; //do proměnné dny vypočítáme počet dnů, 86400 = 1 den v sekundách
				echo "Do konce školního roku zbývá ".round($dny)." dnů";
			  ?>
			</fieldset>
			
			<fieldset>
			  <legend>Kolik dnů jsem na světě?</legend>
			  
              <?php
				$dnes = date("U"); //aktuální čas v sekundách běžící od 1.1.1970
				$cil = mktime(8,0,0,4,2,2004); //čas v budoucnu (vyjádřený v sekundách od 1.1.1970), funkce mktime nastavuje hod, min, sec, měs, den a rok
				$rozdil = $dnes - $cil; //časový úsek v sek mezi 2 událostmi
				$dny = $rozdil/86400; //do proměnné dny vypočítáme počet dnů, 86400 = 1 den v sekundách
				echo "Na světě jsem ".number_format($dny,0,","," ")." dnů";
			  ?>
			</fieldset>
			
			<fieldset>
			  <legend>Co právě hraje na Rádiu Zlín?</legend>
			  
              <?php
				$text = file_get_contents('http://www.radiozlin.cz/stream_live/hraje.txt');
					if ($text == "0 -  ") { //Pokud se proměnná rovná (zprávy, počasí, vstupy) "0 -  ", tak se zobrazí zpráva "Už za chvíli..."
						$text = "Už za chvíli...";};
				echo $text;
			  ?>
			</fieldset>
			
			<fieldset id="BMI">
			  <legend>Výpočet BMI</legend>
			  
              <form method="post" action="#BMI">
                Zadejte hmotnost: <input name="m" placeholder="kg" type="text"/>
                <br>
                Zadejte výšku: <input name="v" placeholder="cm" type="text"/>
                <br>
                <input type="submit" name="btnSubmit" value="Odeslat">
			  </form>
				
                <?php
				if(isset($_POST["btnSubmit"])){
                    $m = $_POST["m"];
                    $v = $_POST["v"]/100;
                    $bmi = $m / ($v * $v);
                    echo "<br>";
                    echo "<b>BMI = ".round($bmi,2)."</b>";
			    }
			    ?>
			</fieldset>


        </section>
        
    <script type="text/javascript" src="app.js"></script>
    
    <script> // Prevents form resubmit alert
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
    </body>

</html>
