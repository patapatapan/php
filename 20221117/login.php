<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
  body {
    text-align: center;
  }

  div.welcome {
    color: green;
  }

  div.error {
    color: red;
  }
  </style>

</head>

<body>
  <!--<div class="welcome"></div>
  <div class="error"></div> -->
</body>

</html>


<?php

$userpass = array(
    'johnny' => '0209',
    'ofelia' => '0929',
);

$count = count($userpass);
if (!$_POST['uname'] || !$_POST['upass']) {
    echo "<div class='error'>請輸入帳號密碼</div>";
} else {
    //有收到$uname 和 $upass
    $username = $_POST['uname'];
    $password = $_POST['upass'];

    $count = 1;
    foreach ($userpass as $key => $value) {
        if ($username == $key) {
            //echo "{$username} = {$key}";
            break;

        } else {
            if ($count == count($userpass)) {
                echo "<div class='error'>查無此用戶!</div>";
                //exit;
                return;
            }
            $count++;
        }
    }

    if ($userpass[$username] == $password) {
        echo "<div class='welcome'>會員你好!";
        echo "你有新留言</div>";
    } else {
        echo "<div class='error'>密碼錯誤!</div>";

    }

}
?>
