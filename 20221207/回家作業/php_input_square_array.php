<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>正方形</title>
</head>

<body>
  <form action="php_square_array.php" method="get" id="form" align="center">
    寬:<input type="number" oninput="value=value.replace('-','')" name="width" required><br>
    長:<input type="text" /*oninput="value=value.replace('-','')" */ name="height" required><br>
    <input type="submit" value="送出"><br>
  </form>

</body>

</html>