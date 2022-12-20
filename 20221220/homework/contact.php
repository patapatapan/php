<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>與我聯絡</title>
</head>

<body>
  <form action="contact.php" method="post">
    <h2>聯絡表單</h2>
    <p>姓名: </p>
    <input type="text" name="姓名" value="姓名">
    <p>電話: </p>
    <input type="number" name="電話" value="電話">
    <p>意見:</p>
    <textarea name="意見" cols="30" rows="5"></textarea>

    <input type="submit" value="送出">
    <input type="reset" value="取消">

  </form>

</body>

</html>