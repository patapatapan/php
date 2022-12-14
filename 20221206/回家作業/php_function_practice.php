<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>早餐</title>
</head>

<body>
  <form action="function.php" method="post" id="form" align="center">
    吃甚麼: <select name="time">
      <option value="">請選擇用餐時間</option>
      <option value="早餐">早餐</option>
      <option value="午餐">午餐</option>
      <option value="晚餐">晚餐</option>
      <option value="消夜">消夜</option>
    </select><br>
    甚麼食物: <select name="foods">
      <option value="">請選擇食物</option>
      <option value="漢堡">漢堡</option>
      <option value="薯條">薯條</option>
      <option value="牛排">牛排</option>
      <option value="泡麵">泡麵</option>
    </select><br>
    <input type="submit" value="送出"><br>
  </form>

</body>

</html>