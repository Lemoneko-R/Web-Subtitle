<?php
$json = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?lang=ja-zh&text='.$_GET["text"].'&format=html&key=trnsl.1.1.20181201T132435Z.c34b08a508601c8a.897ebb694a006ca2a895dadac1bb3bc2a5039117');
$text = json_decode($json,true);
echo $text["text"]["0"];