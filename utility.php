<!DOCTYPE html>

<html lang="cs">

    <head>
        <meta charset="UTF-8">
        <title>Jakub Vorel • Utility</title>
        <link rel="icon" type="image/png" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/man-raising-hand-light-skin-tone_1f64b-1f3fb-200d-2642-fe0f.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/styly.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

            <div class="nadpis"><p>PHP  Utility</p></div>

            <fieldset>
                <legend>Aktuální datum a čas</legend>
                
                <?php
                    echo date("j. n. Y") . " - " . date("H:i:s");
                ?>
            </fieldset>
						
            <!-- FIX $aktrok -->

			<fieldset>
			  <legend>Počet dnů do konce školního roku - 30. 6. 2022</legend>
			  
              <?php
			  	$aktrok = date("Y"); //Aktuální rok (2021)
				$dnes = date("U"); //aktuální čas v sekundách běžící od 1.1.1970
				$cil = mktime(0,0,0,6,30,2022); //čas v budoucnu (vyjádřený v sekundách od 1.1.1970)
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

            <fieldset id="radiozlin">
                <legend>Co právě hraje na Hitrádiu Zlín?</legend>

                <?php
                    $json = file_get_contents('https://radia.cz//data//pravehraje//new-322-currentnext.json');
                    $json_array = json_decode($json, true);
                                                
                    $autor = $json_array['current']['interpret'];
                    $song = $json_array['current']['song'];
                    $cover = $json_array['current']['image'];
                    $zacatek = substr($json_array['current']['begin'], 10);
                    $konec = substr($json_array['current']['end'], 10);

                    echo "<a style='cursor: default;' href=\"$cover\" target='_blank'>" . "<img style=\"height: 200px; width: 200px; margin: 25px; cursor: pointer; margin: 0 0 25px 0;\" src=" . $cover . " ></a>";
                    echo "<br>";
                    echo $autor . " - " . $song;
                    echo "<br>" . "<br>";
                    echo '<p style="font-size: 0.9em; letter-spacing: 0.05em;">' . $zacatek . " - " . $konec . '</p>';
                ?>
			</fieldset>

            <fieldset class="jidelnicek">
			  <legend>Školní jídelníček</legend>
			  
              <?php
                $url = file_get_contents('http://109.231.158.142:84/faces/login.jsp');
                $datum1 = explode( '<span class="important">' , $url ); // Od HTML
                $datum2 = explode( '</span>' , $datum1[1]); // Do HTML
                $obed1 = explode( '<div align="left">' , $url ); // Od HTML
                $obed2 = explode( '<div class="jidelnicekDen">' , $obed1[1]); // Do HTML

                $datum = $datum2[0];

                echo '<p style="font-weight: bold;">' . str_replace('.', ". ", $datum) . '</p>';
                echo $obed2[0]; // Output textu ve výběru
			  ?>
			</fieldset>

            <fieldset>
                <legend>Sportka</legend>
                <?php 
                    $a = range(1, 6);
                    shuffle($a);
                    foreach ($a as $x){
                    echo "<img style=\"height: 80px; width: 80px; margin: 25px\"  src=\"img/kostky/".$x.".png\" >";
                    }
                ?>
	        </fieldset>

            <fieldset id="BMI">
			  <legend>Výpočet BMI</legend>
			  
              <form method="post" action="#BMI">
                Zadejte hmotnost: <input name="m" placeholder="kg" type="number" required >
                <br>
                Zadejte výšku: <input name="v" placeholder="cm" type="number" required >
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
                        echo "<br>";
                        echo "<br>";
                        echo "<div style='display: flex; justify-content: center;'>
                                    <table cellspacing='25'>
                                        <tr>
                                            <th>BMI</th>
                                            <th>Kategorie</th>
                                        </tr>
                                        
                                        <tr>
                                            <td>Méně než 16,4</td>
                                            <td>Těžká podváha</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>16,5 - 18,4</td>
                                            <td>Podváha</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>18,5 - 24,9</td>
                                            <td>Norma</td>
                                        </tr>
                                        <tr>
                                            <td>25,0 - 29,9</td>
                                            <td>Nadváha</td>
                                        </tr>
                                        <tr>
                                            <td>30,0 - 34,9</td>
                                            <td>Obezita 1. stupně</td>
                                        </tr>
                                        <tr>
                                            <td>35,0 - 39,9</td>
                                            <td>Obezita 2. stupně</td>
                                        </tr>
                                        <tr>
                                            <td>40,0 a více</td>
                                            <td>Obezita 3. stupně</td>
                                        </tr>
                                    </table>
                                </div>";
			    }
			    ?>
			</fieldset>

            <div class="utilityhalf">
			
			<fieldset id="cas">
                <legend>Převod času</legend>
                <form method="post" action="#cas">
                Čas v sekundách: <input type="number" name="cas" placeholder="s" required >
                <input type="submit" value="Vypočítej" />
                </form>
                <?php 
                    if(isset($_POST["cas"])){
                    $cas = $_POST["cas"];
                    $h = floor($cas/3600); //odsekává des. část
                    $m = floor(($cas - $h*3600)/60);
                    $s = $cas - $h*3600 - $m*60;
                    echo "<br>";
                    echo "<b>" . $cas." s = ".$h." h ".$m." m ".$s." s</b>";
                    }
                ?>
            </fieldset>
  
	        <fieldset id="rychlost">
                <legend>Převod rycholsti</legend>
                <form method="post" action="#rychlost">
                Rychlost: <input type="number" name="km" placeholder="km/h" required >
                <input type="submit" value="Vypočítej m/s" />
                </form>
                <?php 
                    if(isset($_POST["km"])){
                    $km = $_POST["km"];
                    $m = $km/"3.6";
                    echo "<br>";
                    echo "<b>" . $m . " m/s</b>";       
                    }
                ?>
	        </fieldset>
	
        </div>

        <fieldset id="forms">
                <legend>Formuláře</legend>

                <form method="post" action="#forms">
                    Jméno: <input type="text" placeholder="Jan" name="name" required/>
                    Příjmení: <input type="text" placeholder="Novák" name="surname" required/>
                    
                    <br>
                    
                    Bydliště:
                        <select name="bydliste">
                            <option value="Karviná">Karviná</option>
                            <option value="Orlová">Orlová</option>
                            <option value="Havířov">Havířov</option>
                            <option value="Český Těšín">Český Těšín</option>
                            <option value="Bohumín">Bohumín</option>
                        </select>  
                    
                    <br>

                    Pohlaví:
                    <br>
                        <div class="vyber">Muž<input type="radio" name="pohlavi" value="Muž" checked/></div>
                        <div class="vyber">Žena<input type="radio" name="pohlavi" value="Žena"/></div>
                    
                    Heslo: <input type="password" placeholder="👀" name="heslo" required/>
                    
                    <br>
                    
                    Zadej tvou výšku v cm: <input type="number" placeholder="cm" name="cm" required/>
                    Zadej tvou hmotnost v kg: <input type="number" placeholder="kg" name="kg" required/>

                    <br> 
                
                    Oblíbená jídla: 
                    <br>
                        <div class="vyber">Svíčková<input type="checkbox" name="jidlo0"/></div>
                        <div class="vyber">Pizza<input type="checkbox" name="jidlo1"/></div>
                        <div class="vyber">Párek<input type="checkbox" name="jidlo2"/></div>
                        <div class="vyber">Rajská omáčka<input type="checkbox" name="jidlo3"/></div>
                        <div class="vyber">Bramboráky<input type="checkbox" name="jidlo4"/></div>
                

                    <input class="ok" type="submit" value="OK"/>
                </form>

                <?php
                    if(isset($_POST["name"]))
                        echo "<b>Jméno: </b>" . $_POST ["name"] . '<br>'
                ?>

                <?php
                    if(isset($_POST["surname"]))
                        echo "<b>Příjmení: </b>" . $_POST ["surname"] . '<br>'
                ?>

                <?php
                    if(isset($_POST["bydliste"]))
                        echo "<b>Bydliště: </b>" . $_POST ["bydliste"] . '<br>'
                ?>

                <?php
                    if(isset($_POST["pohlavi"]))
                        echo "<b>Pohlaví: </b>" . $_POST ["pohlavi"] . '<br>'
                ?>

                <?php
                    if(isset($_POST["heslo"]))
                        echo "<b>Heslo: </b>" . $_POST ["heslo"] . '<br>'
                ?>

                <?php
                    if(isset($_POST["cm"]))
                        echo "<b>Výška: </b>" . $_POST ["cm"] . ' cm<br>'
                ?>

                <?php
                    if(isset($_POST["kg"]))
                        echo "<b>Hmotnost: </b>" . $_POST ["kg"] . ' kg<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo0"]) || isset($_POST["jidlo1"]) || isset($_POST["jidlo2"]) || isset($_POST["jidlo3"]) || isset($_POST["jidlo4"]))
                        echo '<br>' . "<b>Oblíbená jídla:</b>" . '<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo0"]))
                        echo "Svíčková 🥩" . '<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo1"]))
                        echo "Pizza 🍕" . '<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo2"]))
                        echo "Párek 🌭" . '<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo3"]))
                        echo "Rajská omáčka 🍅" . '<br>'
                ?>

                <?php
                    if(isset($_POST["jidlo4"]))
                        echo "Bramboráky 🥔" . '<br>'
                ?>
            </fieldset>

        <p style="margin-bottom: 20px; cursor: default;">API Hitrádia Zlín převzato z webu Radia.cz</p>
        </section>
        
    <script type="text/javascript" src="app.js"></script>
    
    <script> // Prevents form resubmit alert
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
    </body>

</html>
