<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form" name="form" method="post">
  <p>QQ:
    <input type="number" name="qq" id="qq">
  </p>
  <p>
    <label for="flight1">飞机航班号1:</label>
    <input type="text" name="flight1" id="flight1">
  </p>
  <p>
    <label for="date2">航班1起飞日期:</label>
    <input type="date" name="date1" id="date2">
  </p>
  <p>
    <label for="flight2">飞机航班号2:</label>
    <input type="text" name="flight2" id="flight2">
  </p>
  <p>
    <label for="date2">航班2起飞日期:</label>
    <input type="date" name="date2" id="date2">
  </p>
  <p>
    <label for="destination">去往学校:</label>
    <select name="destination" id="destination">
      <option selected="selected">MacquarieUni</option>
      <option>UNSW</option>
      <option>USydney</option>
      <option>UTS</option>
      <option>MelbourneUni</option>
      <option>RMIT</option>
      <option>MonashUni</option>
      <option>LaTrobe</option>
      <option>Deakin</option>
    </select>
  </p>
  <p>
    <label for="gender">性别:</label>
    <select name="gender" id="gender">
      <option>女</option>
      <option>男</option>
    </select>
  </p>
  <p>
    <label for="name">名字:</label>
    <input type="text" name="name" id="name">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </p>
</form>
</body>
</html>