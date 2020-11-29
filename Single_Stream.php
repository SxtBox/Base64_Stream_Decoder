<?php
/*
MIT License

Copyright (c) 2020 Albdroid.AL

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

/*
ONLY FOR HOBBIES DUDE

STRUCTURE

[STREAM STRING TO ENCODE]
https://stream-eurodance90.fr/radio/8000/128.mp3

[ENCODED STREAM STRING]
aHR0cHM6Ly9zdHJlYW0tZXVyb2RhbmNlOTAuZnIvcmFkaW8vODAwMC8xMjgubXAz

[GET STREAM]
?url= + [ENCODED STREAM STRING]
*/

error_reporting(0);
date_default_timezone_set("Europe/Tirane");

if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
  $protocol = 'http://';
} else {
  $protocol = 'https://';
}

$ROOT_PATH = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . "/";
$ROOT_URL = $protocol . $_SERVER['SERVER_NAME'] . ($_SERVER['PHP_SELF']) . "";

ob_start();

    if(empty($_GET["url"])) {
    exit( json_encode(array(
	"App" => "Base64 Stream String Decoder",
	"Version" => "1.0",
	"Mode" => "Single Stream",
    "Message" => "Base64 Encoded String Parameter Required",
    "Parameters" => "?url=YOUR BASE64 ENCODED STRING",
	"Example" => "{$ROOT_URL}?url=aHR0cHM6Ly9zdHJlYW0tZXVyb2RhbmNlOTAuZnIvcmFkaW8vODAwMC8xMjgubXAz",
    "PHP Code Generated From Host" => "demo.kodi.al",
    "PHP Code Generated Date" => "Saturday, November 28, 2020 - 23:05:18"
    )));
}

$url = ($_GET["url"]);
$stream_player_link = base64_decode($url);
$stream_player_link = explode("|",$stream_player_link);
// DOWNLOAD AS PLAYLIST
//header("Cache-control: public");
//header("Content-Disposition: filename=playlist.m3u");
//header("Content-Type: audio/x-mpegurl;");
echo "#EXTM3U Albdroid TV Streaming\n";
$title = "Eurodance 90"; // MANUAL TITLE
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
foreach($stream_player_link as $item){
    $i = explode("|",$item);
    echo "#EXTINF:-1," . $title . "\n"; // MANUAL TITLE
    echo $i[0] . "\n";
$i++;
}
ob_end_flush();
?>