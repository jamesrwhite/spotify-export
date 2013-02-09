<?php

// Via: http://www.if-not-true-then-false.com/2010/php-class-for-coloring-php-command-line-cli-scripts-output-php-output-colorizing-using-bash-shell-colors/
require 'colour.php';

//
// Config
// 
$mac_user = 'james';
$spotify_user = 'jamesw12';

$dir = "/Users/$mac_user/Library/Application\ Support/Spotify/Users/$spotify_user-user";
$playlists = array();

foreach (glob("$dir/playlist-*.bnk") as $file_name) {

	if (substr($file_name, -26, 21) !== "000000000000000000000") {

		$file = file_get_contents($file_name);

		preg_match('/spotify:user:' . $spotify_user . ':playlist:([a-zA-Z0-9]{22})/', $file, $matches);
		
		if (is_array($matches) and isset($matches[0])) {

			$playlists[] = $matches[0];

		}

	}

}

// Convert to JSON
$playlists = json_encode($playlists);

// Build the file contents
$contents = "var sp = getSpotifyApi(1);
exports.get = function get() {
	return $playlists;
};";

// Pretty terminal colours
$colour = new Colour;

// Save the file
if (file_put_contents('spotify_app/export/playlists.js', $contents)) {

	echo $colour->getColouredString('Success!', 'green');
	echo "\n";

} else {

	echo $colour->getColouredString('Fail :(', 'red');
	echo "\n";

}