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
                <legend>Aktuální datum a čas</legend>
                
                <?php
                    echo date("j. m. Y") . " - " . date("H:i:s");
                ?>
            </fieldset>
						
			<fieldset>
			  <legend>Počet dnů do konce školního roku - 30. 6. <?php echo date("Y"); ?></legend>
			  
              <?php
			  	$aktrok = date("Y"); //Aktuální rok (2021)
				$dnes = date("U"); //aktuální čas v sekundách běžící od 1.1.1970
				$cil = mktime(0,0,0,6,30,$aktrok); //čas v budoucnu (vyjádřený v sekundách od 1.1.1970)
				$rozdil = $cil - $dnes; //časový úsek v sek mezi 2 událostmi
				$dny = $rozdil/86400; //do proměnné dny vypočítáme počet dnů, 86400 = 1 den v sekundách
				echo "Do konce školního roku zbývá ".round($dny)." dnů";
			  ?>
			</fieldset>
			
			<fieldset>
			  <legend>Kolik dnů jsem na světě?</legend>
			  
              <?php
				$dnes = date("U"); //aktuální čas v sekundách běžící od 1.1.1970
				$cil = mktime(8,0,0,4,2,2004); //čas v budoucnu (vyjádřený v sekundách od 1.1.1970)
				$rozdil = $dnes - $cil; //časový úsek v sek mezi 2 událostmi
				$dny = $rozdil/86400; //do proměnné dny vypočítáme počet dnů, 86400 = 1 den v sekundách
				echo "Na světě jsem ".number_format($dny,0,","," ")." dnů";
			  ?>
			</fieldset>
			
            <fieldset>
			  <legend>Co právě hraje na Hitrádiu Zlín?</legend>
			  
              <?php
				$json = file_get_contents('https://radia.cz//data//pravehraje//new-322-currentnext.json');
                $json_array = json_decode($json, true);
                                
                $autor = $json_array['current']['interpret'];
                $song = $json_array['current']['song'];
                $zacatek = substr($json_array['current']['begin'], 10);
                $konec = substr($json_array['current']['end'], 10);

                echo $autor . " - " . $song; // Vypsání Autora a Skladby
                echo "<br>" . "<br>";
                echo $zacatek . " - " . $konec; // Vypsání Začátku a Konce skladby
			  ?>
			</fieldset>
			
			<fieldset id="BMI">
			  <legend>Výpočet BMI</legend>
			  
              <form method="post" action="#BMI">
                Zadejte hmotnost: <input name="m" placeholder="kg" type="text" required >
                <br>
                Zadejte výšku: <input name="v" placeholder="cm" type="text" required >
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

            <fieldset id="koule">
                <legend>Výpočet objemu koule</legend>
                
                <form method="post" action="#koule">
                r = <input type="text" name="r" placeholder="poloměr" required >
                <input name="objem" type="submit" value="Vypočítej objem" >
                </form>
                
                <?php
                    if(isset($_POST["objem"])){
                    $r = $_POST["r"];
                    $objem = 4/3 * pi() * pow($r,3);  //výpočet objemu
                    echo "<br>";
                    echo "<b>Objem koule = ".round($objem,2)." jednotek krychlových</b>";
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
