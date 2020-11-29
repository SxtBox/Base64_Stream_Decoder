# Base64 Stream Decoder
Encoded String Decoding

# Multi_Playlist.php

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

# Single_Stream.php

    [STREAM STRING TO ENCODE]
    https://stream-eurodance90.fr/radio/8000/128.mp3

    [ENCODED STREAM STRING]
    aHR0cHM6Ly9zdHJlYW0tZXVyb2RhbmNlOTAuZnIvcmFkaW8vODAwMC8xMjgubXAz

    [GET STREAM]
    ?url= + [ENCODED STREAM STRING]
