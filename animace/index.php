<!DOCTYPE html>
  <?php error_reporting(0); ?>
<html>

<!-- POHYBUJÍCÍ SE ČTVEREC -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="refresh" content="30;url=./padak/">
  <link rel="icon" type="image/png" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/microsoft/310/large-blue-square_1f7e6.png" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <meta name="keywords" content="animace" lang="cs" />
  <meta name="author" content="Jakub Vorel" />
  <title>Animovaný čtverec</title>

  <style type="text/css">
    body {
      background: #222;
      font-family: "Open Sans", sans-serif;
    }

    .go {
      animation-name: example;
      animation-duration: 6s;
      animation-iteration-count: infinite;
      animation-direction: alternate;
      animation-timing-function: ease-in;
    }

    @keyframes example {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(150deg);
      }
    }
  </style>
</head>

<body>
  <div class="cely_web">

    <?php
    for ($i = 1; $i <= 80; $i++)
      echo "<div class=\"go\" style=\"
              position: absolute;
              top: 30%;
              left: 35%;
              background: rgba(244,164,9,0.02);
              border: 2px solid rgba(244,164,9,0.025);
              border-radius: ", $i + 15, "px; 
              width: ", $i * 5 + 100, "px;
              height: ", $i * 5 + 100, "px;
              transform: rotate(", $i * 10, "deg);
              animation-delay: ", $i * 0.10, "s;\">
              </div>";
    ?>

    <div style="color: white; position: fixed; bottom: 5px; right: 5px; ">Jakub Vorel, 2022</div>
    <div style="color: white; position: fixed; left: 5px; bottom: 5px; ">PHP + CSS</div>
  </div>

  </div>
</body>

</html>