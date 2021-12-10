<!DOCTYPE html>

<html lang="cs">

    <head>
        <meta charset="UTF-8">
        <title>Jakub Vorel • Seminář</title>
        <link rel="icon" type="image/png" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/271/man-raising-hand-light-skin-tone_1f64b-1f3fb-200d-2642-fe0f.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/styly.min.css">
        <link href='https://fonts.googleapis.com/css?family=Monoton|Comfortaa' rel='stylesheet'>
    </head>
	
<style>

	form {
		width: 80%;
	}

	fieldset{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		column-gap: 20px;
		row-gap: 20px;
		margin: 20px !important;
	}
	
	table, th, td {
    	border: 1px solid black;
		border-collapse: collapse;
	}

	td, th {
		width: 50px;
		height: 50px;
	}
	
	.smiley {
	  height: 200px;
	  width: 200px;
	  position: relative;
	  border-radius: 100px;
	}
	
	.smiley .eye {
	  height: 24px;
	  width: 24px;
	  border-radius: 12px;
	  position: absolute;
	}
	
  .left-eye {
	  top: 40px;
	  left: 60px;
  }
  
  .right-eye {
	  top: 40px;
	  right: 60px;
  }
  
  .mouth {
	  border-bottom-right-radius: 50px;
	  border-bottom-left-radius: 50px;
	  height: 50px;
	  background-color: #000;
	  position: absolute;
	  width: 100px;
	  left: 50px;
	  top: 120px;
	  
  }

  .smiley div {
	  background-color: black;	
  }
  
  .smiley {
	  background-color: darkgray;
  }
	
</style>

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
                <li><a href="./utility.php">Utility ⚙️</a></li>
				<li style="display: flex; justify-content: center; align-items: center; margin-right: 10px;"><button onclick="window.scrollTo(0,document.body.scrollHeight);">Sjeď dolů :D</button></li>
            </ul>
        </nav>

        <section class="utility">

            <div class="nadpis"><p style="margin: 0;">SEMINAR</p></div>
			
			 <fieldset id="tabulky">
                <legend>Tabulky</legend>
				
				<table>
				   	<tr>
						<td colspan="2" style="background: rgba(240,128,128, .75);">1</td>
					</tr>
     				<tr>
						<td style="background: rgba(144,238,144, .75);">2</td>
						<td style="background: rgba(144,238,144, .75);">3</td>
					</tr>
  				</table>
				
				<table>
     				<tr>
						<td rowspan="2" style="background: rgba(240,128,128, .75);">1</td>
						<td style="background: rgba(144,238,144, .75);">2</td>
					</tr>
     				<tr>
						<td style="background: rgba(144,238,144, .75);">3</td>
					</tr>
  				</table>
				
            </fieldset>

            <fieldset>
                <legend>Švýcarská vlajka</legend>
                
				<div style="margin-bottom: 20px; background: #D52B1E; width: 250px; height: 250px; position: relative;">
				  <div style="background: #FFFFFF; width: 150px; height: 50px; position: absolute; top: 100px; left: 50px;"></div>
				  <div style="background: #FFFFFF; width: 50px; height: 50px; position: absolute; top: 50px; left: 100px;"></div>
				  <div style="background: #FFFFFF; width: 50px; height: 50px; position: absolute; top: 150px; left: 100px;"></div>
				  <p style="position: absolute; bottom: -25px; right: 0;">Švýcarsko</p>
				</div>
				
            </fieldset>
			
			<fieldset>
				<legend>Smajlík</legend>
				
				<div class="smiley">
				  <div class="left-eye eye"></div>
				  <div class="right-eye eye"></div>
				  <div class="mouth"></div>
				</div>
			
			</fieldset>

			<fieldset>
				<legend>Stupňující se velikost</legend>
				
			  <?php
			  
			  $x = 50;
			  for($i=1; $i<=$x; $i++)
			  echo "<div style=\"width: ".$i."px; height: ".$i."px; background: orange; margin: 2px;\"></div>";
			  
			  ?>
			
			</fieldset>
			
			<fieldset style="row-gap: 0; column-gap: 0; margin: 0;">
				<legend>Šachovnice</legend>
				
			  <?php
				$x = 64;
				$a = 1;
				
				for($i=1; $i<=$x; $i++)
				{
				
				  if($a % 2 == 0)
				  echo "<div style=\"width: 30px; height: 30px; background: black ; margin: 0;\"></div>";
				  
				  else
				  echo "<div style=\"width: 30px; height: 30px; background: white; margin: 0;\"></div>";
				  
				  if($i % 8 == 0)
				  {echo "<div style=\"flex-basis: 100%; height:0;\"></div>"; $a++;};
				  $a++;
				
				}
			  ?>
			
			</fieldset>
			
			<fieldset>
				<legend>Písmeno N</legend>
				
				<form method=post>
					<input type="number" placeholder="Number" name="xyz" min="5" max="20" required/>
					<input class="ok" type="submit" value="OK"/>
				</form>
				
				<div style="flex-basis: 100%; height:0;"></div>
								
				<table>
				  <?php
				  
  					if(isset($_POST['xyz'])) {
					
					$cislo = $_POST['xyz'];
				  
					for($i=1; $i<=$cislo; $i++) {
					 	echo "<tr>";
					 		for($j=1; $j<=$cislo; $j++)
							if(($i ==$j) or ($j == 1) or ($j == $cislo))
					 			echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: red;\"></td>";  
								
								else
								echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: white;\"></td>";   
					 			echo "</tr>";
					 }}
				  ?>
				</table>
			</fieldset>
			
						<fieldset>
				<legend>Písmeno Z</legend>
				
				<form method=post>
					<input type="number" placeholder="Number" name="z" min="5" max="25" required/>
					<input class="ok" type="submit" value="OK"/>
				</form>
				
				<div style="flex-basis: 100%; height:0;"></div>
								
				<table>
				  <?php
				  
  					if(isset($_POST['z'])) {
					
					$cislo = $_POST['z'];
					
					$test = $cislo + 1; // Promenna se vstupnim cislem + 1
				  
					for($i=1; $i<=$cislo; $i++) { // Print table
					
					// i jsou radky
					// j jsou slopuce
					
					$test--; // Odecist 1 pri kazdem cyklu
					
					 	echo "<tr>";
						
					 		for($j=1; $j<=$cislo; $j++) // Print table cells
							
							if(($j == $test) /* uhlopricka */ or ($i == 1) /* vrchni rada */ or ($i == $cislo) /* spodni rada */)
					 			echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: red;\"></td>";  
								
								else
								
								echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: white;\"></td>";   
					 			echo "</tr>";
					 }}
				  ?>
				</table>
			</fieldset>
			
			<fieldset style="display: flex; flex-direction: row;">
				<legend>Písmeno A / X</legend>
				
				
				<form method=post>
					<input type="number" placeholder="Number" name="ax" min="5" max="25" required/>
					<input class="ok" type="submit" value="OK"/>
				</form>
				
				<div style="flex-basis: 100%; height:0;"></div>
						
				<table>
				  <?php
				  
  					if(isset($_POST['ax'])) {
					
					$cislo = $_POST['ax'];
					
					$test = $cislo + 1; // Promenna se vstupnim cislem + 1
				  
					for($i=1; $i<=$cislo; $i++) { // Print table
					
					// i jsou radky
					// j jsou slopuce
					
					$test--; // Odecist 1 pri kazdem cyklu
					
					 	echo "<tr>";
						
					 		for($j=1; $j<=$cislo; $j++) // Print table cells
							
							if(($j == 1) /* leva noha */ or ($j == $cislo) /* prava noha */ or ($i == 1) /* vrchni rada */ or ($i == round(($cislo/2))) /* prostredni rada */)
					 			echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: red;\"></td>";  
								
								else
								
								echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: white;\"></td>";   
					 			echo "</tr>";
					 }}
				  ?>
				</table>
				
			
				

								
				<table>
				  <?php
				  
  					if(isset($_POST['ax'])) {
					
					$cislo = $_POST['ax'];
					
					$test = $cislo + 1; // Promenna se vstupnim cislem + 1
				  
					for($i=1; $i<=$cislo; $i++) { // Print table
					
					// i jsou radky
					// j jsou slopuce
					
					$test--; // Odecist 1 pri kazdem cyklu
					
					 	echo "<tr>";
						
					 		for($j=1; $j<=$cislo; $j++) // Print table cells
							
							if(($j == $test) /* uhlopricka */ or ($i==$j))
					 			echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: red;\"></td>";  
								
								else
								
								echo "<td style=\"width: 20px; height: 20px; border: 1px solid red; background: white;\"></td>";   
					 			echo "</tr>";
					 }}
				  ?>
				</table>
			
				
			</fieldset>
			
			<fieldset style="display: block;">
				<legend>Práce s .txt</legend>
				
				<?php
				
				$x = file("./php-text/obedy.txt");
				
				$i = 1; /* Počítalo */
				
				
				foreach($x as $y){	/* Příkaz cyklu, který projde všechny prvky v poli -> ARRAY */			

					
					$z = explode(";", $y); /* Explodde roztrhá array na array */
					
					if($i<=5)
						echo "<b>Polévka: </b>" . $z[0] . " <b>Hlavní jídlo: </b>" . $z[1] ."<br>" ."<br>";
					else
						echo "<p style='color: darkmagenta'>" . "<b>Polévka: </b>" . $z[0] . " <b>Hlavní jídlo: </b>" . $z[1] . "</p>" ."<br>";
					
					$i++;
 				};
				
				?>
			
			</fieldset>
			
			<fieldset style="display: block;">
				<legend>Práce s .csv</legend>
				
				<table style="margin: auto; width: 70%;">
					<th>Příjmení</th><th>Jméno</th><th>BMI</th>
				
				<?php
				  $i = 1; /* Počítalo */
				  $x = file("./php-text/pacienti.csv");
				  foreach($x as $y){ //prikaz cyklu, projde vsechny prvky v poli
					
					$y = iconv("windows-1250", "UTF-8", $y); // Převod na české znaky z Windows kódování
					$y = str_replace(",", ".",$y); //Přepis čárky na tečku
					$z = explode(";",$y); //explode - roztrhne text do pole
					
					$m = $z[2];
					$v = $z[3];
					$bmi = $m / ($v * $v); // Výpočet BMI
					
					echo "<tr><td>".$z[0]. "</td><td>" .$z[1]. "</td><td>" . number_format($bmi, 2, ',', ' ') . "</td></tr>";
					$i++;
				  }
				?>
				</table>
			</fieldset>
			
			<fieldset style="display: block;">
				<legend>Kolik lidí z gymnázia má dneska svátek?</legend>
				
				<?php
					$adresa = file_get_contents("http://svatky.centrum.cz/");
					$prvek = explode("Dnes má svátek:", $adresa);
					$p = explode('"',$prvek[1]);
					$jmeno_api = $p[1];
					
					$x = file("./php-text/zaci.csv");
					$pocet = 0; // Vynulování
					
					foreach($x as $y){
						$prv = explode(" ", $y);
						
							if($jmeno_api == trim($prv[0]))
								$pocet++;
					}
					echo "Dnes má svátek <b>" . $jmeno_api . "</b><br><br>";
					echo "Tento svátek slaví <b>" . $pocet . " žáků</b>";
				?>
			</fieldset>
			
			<fieldset style="display: block;">
				<legend>Práce s .csv TEST</legend>
				
				<table style="margin: auto; width: 70%; border: none;">
					<tr style="background: rgba(220,220,220, .75)"><th>Jméno</th><th>Příjmení</th><th>Plat</th></tr>
				
				<?php
				  $i = 1; /* Počítalo */
				  $x = file("./php-text/pracanti.csv");
				  $sum = 0;
				  foreach($x as $y){ //prikaz cyklu, projde vsechny prvky v poli
					
					$z = explode(";",$y); //explode - roztrhne text do pole, aby bylo moźné použít -> [0]
					
					$sum = $z[2] + $sum; // Počítá výslednou sumu sloupečku s platy
					
					$tr_style = ($i%2 == 0)? 'background: rgba(240,128,128, .5)': 'background: rgba(144,238,144, .5)'; // Obarvuje řádky z CSV (na přidané html header a footer nemá vliv!)
					
					echo "<tr style='$tr_style'><td>".$z[0]. "</td><td>" .$z[1]. "</td><td id='cell'>" .number_format($z[2], 0, ',', ' ')  . " Kč</td></tr>";
					$i++;
				  }
				  
				  $prumer = $sum / count($x);
				?>
					<tr style="background: rgba(220,220,220, .75)"><td style="visibility: hidden; border: none;"></td><td><strong>Celkem</strong></td><td><?php echo number_format($sum, 0, ',', ' ')  . " Kč" ?></td>
					
					</tr>
					
					<tr style="background: rgba(220,220,220, .75)"><td style="visibility: hidden; border: none;"></td><td><strong>Průměr</strong></td><td><?php echo number_format($prumer, 0, ',', ' ')  . " Kč" ?></td></tr>
				</table>
			</fieldset>
						

       </section>
	   
	   <button style="margin: 10px;" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">Vyjeď nahoru :D</button>
        
    <script type="text/javascript" src="app.js"></script>
	    
    <script> // Prevents form resubmit alert
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
    </body>

</html>
