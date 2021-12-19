<legend>Náhodný meme</legend>

<?php
	$json = file_get_contents('https://meme-api.herokuapp.com/gimme');
    $json_array = json_decode($json, true);
                                
    $meme_post = $json_array['postLink'];
    $meme_name = $json_array['title'];
    $meme_subreddit = $json_array['subreddit'];
    $meme_author = $json_array['author'];
    $meme_ups = $json_array['ups'];
    $meme_image = $json_array['preview'][2];
    

    echo "<h3>" . $meme_name . "</h3>";
    echo "<a style='cursor: default; width: 320px; display: block; margin: 25px auto;' href=\"$meme_post\" target='_blank'>" . "<img style=\"width: 320px; cursor: pointer; border: 0.5px solid black\" alt=\"Cover image\" src=" . $meme_image . " ></a>";
    echo "From: " . $meme_subreddit . " | By: " . $meme_author;
    echo "<br>" . "<br>";
    echo '<p style="font-size: 0.9em; letter-spacing: 0.05em;">⬆️ ' . $meme_ups . '</p>';
?>