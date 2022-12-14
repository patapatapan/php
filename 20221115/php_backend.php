<?php
//取得前台資料
$user = $_GET["user"];
$email = $_GET["email"];
$edu = $_GET["edu"];
$hobbys = $_GET["hobbys"];

//method 1
//foreach ($hobbys as $hobby) {
//    echo $hobby . "<br>";
//}

//method 2
$h = implode(",", $hobbys);

echo "使用者是 {$user} 他的郵件是 {$email} <br> 學歷是 {$edu} 嗜好是 {$h}";