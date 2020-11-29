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

[PLAYLIST STRING TO ENCODE]
Eurodance 90
https://stream-eurodance90.fr/radio/8000/128.mp3
Dance Wave
http://stream.dancewave.online:8080/dance.mp3
Masters of Hardcore Podcast 212 by Broken Minds
https://traffic.libsyn.com/secure/mastersofhardcore/podcast_212_CHAPTERS.mp3
Melodia FM Disco
http://melodia.ipfm.net/MelodiaFM_Disco_HD

[ENCODED PLAYLIST STRING]
RXVyb2RhbmNlIDkwCmh0dHBzOi8vc3RyZWFtLWV1cm9kYW5jZTkwLmZyL3JhZGlvLzgwMDAvMTI4Lm1wMwpEYW5jZSBXYXZlCmh0dHA6Ly9zdHJlYW0uZGFuY2V3YXZlLm9ubGluZTo4MDgwL2RhbmNlLm1wMwpNYXN0ZXJzIG9mIEhhcmRjb3JlIFBvZGNhc3QgMjEyIGJ5IEJyb2tlbiBNaW5kcwpodHRwczovL3RyYWZmaWMubGlic3luLmNvbS9zZWN1cmUvbWFzdGVyc29maGFyZGNvcmUvcG9kY2FzdF8yMTJfQ0hBUFRFUlMubXAzCk1lbG9kaWEgRk0gRGlzY28KaHR0cDovL21lbG9kaWEuaXBmbS5uZXQvTWVsb2RpYUZNX0Rpc2NvX0hE

[GET PLAYLIST]
?url= + [ENCODED PLAYLIST STRING]
*/
error_reporting(0);

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
    exit(json_encode(array(
    "App" => "Base64 Stream String Decoder",
    "Version" => "1.0",
    "Mode" => "Multi Stream",
    "Message" => "Base64 Encoded String Parameter Required",
    "Parameters" => "?url=YOUR BASE64 ENCODED STRING",
    "Example" => "{$ROOT_URL}?url=RXVyb2RhbmNlIDkwCmh0dHBzOi8vc3RyZWFtLWV1cm9kYW5jZTkwLmZyL3JhZGlvLzgwMDAvMTI4Lm1wMwpEYW5jZSBXYXZlCmh0dHA6Ly9zdHJlYW0uZGFuY2V3YXZlLm9ubGluZTo4MDgwL2RhbmNlLm1wMwpNYXN0ZXJzIG9mIEhhcmRjb3JlIFBvZGNhc3QgMjEyIGJ5IEJyb2tlbiBNaW5kcwpodHRwczovL3RyYWZmaWMubGlic3luLmNvbS9zZWN1cmUvbWFzdGVyc29maGFyZGNvcmUvcG9kY2FzdF8yMTJfQ0hBUFRFUlMubXAzCk1lbG9kaWEgRk0gRGlzY28KaHR0cDovL21lbG9kaWEuaXBmbS5uZXQvTWVsb2RpYUZNX0Rpc2NvX0hE",
    "PHP Code Generated From Host" => "demo.kodi.al",
    "PHP Code Generated Date" => "Saturday, November 28, 2020 - 23:05:18"
    )));
}

$url = ($_GET["url"]);
$stream_player_link = base64_decode($url);

if(preg_match_all('/(.*.*?.*\w)\n(.*http.*?.*\w)/',$stream_player_link, $matches, PREG_SET_ORDER));

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
// DOWNLOAD AS PLAYLIST
//header("Cache-control: public");
//header("Content-Disposition: filename=playlist.m3u");
//header("Content-Type: audio/x-mpegurl;");
echo("#EXTM3U Albdroid TV Streaming\n");
foreach ($matches as $items)
{

$title = ($items[1]);
$stream = $items[2];
$stream = str_replace(
array("u002F","\\"),
array("","/"),
$stream
);

{
// ob_end_clean (); // HEQ EXTM3U Albdroid TV Streaming
}

echo "\r#EXTINF:-1,$title\n"; // PER SMART TV
echo $stream."\n";
}
?>
