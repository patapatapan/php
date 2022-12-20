<?php

use GuzzleHttp\Cookie\SetCookie;

$uname = $_POST["username"];
$upass = $_POST["password"];

if ($uname == "johnny" && $upass == "ofeliaissocute") {
    setcookie('username', $uname, time() + 24 * 60 * 60);
    SetCookie('password', $upass, time() + 24 * 60 * 60);
    //echo 登入成功;
    $success = ['msg' => 'OK', 'info' => 'hello'];
    echo json_encode($success);
} else {
    $success = ['msg' => 'FAIL', 'info' => 'hello'];
    echo json_encode($success);

}