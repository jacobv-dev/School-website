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