<legend>Školní jídelníček</legend>

<?php
$url = file_get_contents('http://109.231.158.142:84/faces/login.jsp');
$datum1 = explode('<span class="important">', $url); // Od HTML
$datum2 = explode('</span>', $datum1[1]); // Do HTML
$obed1 = explode('<div align="left">', $url); // Od HTML
$obed2 = explode('<div class="jidelnicekDen">', $obed1[1]); // Do HTML

$datum = $datum2[0];

echo '<p style="font-weight: bold;">' . str_replace('.', ". ", $datum) . '</p>';
echo $obed2[0]; // Output textu ve výběru
?>