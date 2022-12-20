<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>與我聯絡</title>


  <script>
    document.getElementById('form').style.display = "none";
  </script>
</head>

<body>
  <form action="http://localhost:6080/20221220/homework/contact.php" id="form`" method="post">
    <h2>聯絡表單</h2>
    <p>姓名: </p>
    <input type="text" name="姓名" value="">
    <p>電話: </p>
    <input type="tel" name="電話" value="">
    <p>意見:</p>
    <textarea name="意見" cols="30" rows="5"></textarea>

    <input type="submit" value="送出">
    <input type="reset" value="取消">

  </form>

</body>

</html>


<?php

if (empty($_POST['姓名']) || empty($_POST['電話']) || empty($_POST['意見'])) {
  echo "請填表單";
  $count = 0;
} else {
  echo "<script>
  document.getElementById('form').style.display = 'none';
  </script>";
  $name = $_POST['姓名'];
  $tel = $_POST['電話'];
  $contact = $_POST['意見'];





  echo "姓名: " . $name . "<br>";
  echo "電話: " . $tel . "<br>";
  echo "意見: " . $contact . "<br>";
}




?>