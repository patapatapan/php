<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>亂數</title>
</head>

<body>
  <form action="random.php" method="get" id="form" align="center">
    起始值:<input type="number" oninput="value=value.replace('-','')" name="arg1" required><br>
    結尾值:<input type="number" oninput="value=value.replace('-','')" name="arg2" required><br>
    抽多少:<input type="number" oninput="value=value.replace('-','')" name="arg3" required><br>
    <input type="submit" value="送出"><br>
  </form>

</body>

</html>