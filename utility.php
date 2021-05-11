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
                <li><a href="./odkazy.html">Užitečnosti 💡</a></li>
                <li><a class="active" href="./utility.php">Utility ⚙️</a></li>
            </ul>
        </nav>

        <section class="utility">

            <div class="nadpis"><p>Utility</p></div>

            <fieldssset>
                <legend>Datum</legend>

                <?php
                    echo date("j. m. y - H:i:s"); //Poznááámka :)
                    echo "<br>"; //Lájn brejk :)
                    echo date("z"); //Den v roce :)
                ?>

            </fieldset>

        </section>
        
    <script type="text/javascript" src="app.js"></script>
    </body>

</html>
