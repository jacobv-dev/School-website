<legend>Co právě hraje na Hitrádiu Zlín?</legend>

<?php
	$json = file_get_contents('https://radia.cz//data//pravehraje//new-322-currentnext.json');
    $json_array = json_decode($json, true);

    $moderator_url = file_get_contents('https://hitradio.cz/content/static/hitradio-zlin.html');
    $moderator1 = explode( '<div class="moderator">' , $moderator_url );
    $moderator2 = explode( '</div>[2]' , $moderator1[1]);

    $moderator = $moderator2[0];
                                
    $autor = $json_array['current']['interpret'];
    $song = $json_array['current']['song'];
    $cover = $json_array['current']['image'];
    $zacatek = substr($json_array['current']['begin'], 10);
    $konec = substr($json_array['current']['end'], 10);

    echo $moderator;
    echo "<a style='cursor: default; height: 200px; width: 200px; display: block; margin: 25px auto;' href=\"$cover\" target='_blank'>" . "<img style=\"height: 200px; width: 200px; cursor: pointer;\" alt=\"Cover image\" src=" . $cover . " ></a>";
    echo $autor . " - " . $song;
    echo "<br>" . "<br>";
    echo '<p style="font-size: 0.9em; letter-spacing: 0.05em;">' . $zacatek . " - " . $konec . '</p>';
?>