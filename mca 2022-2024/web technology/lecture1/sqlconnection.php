<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>

  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  div {
    width: 250px;
    height: 650px;
  }

  form {
    display: flex;
    flex-direction: column;
    gap: 1em;
  }
</style>
  <body>
<div>
<form  action="insertdata.php" method="post">
  ID:<input type="text" name="id" value="">
  First Name:<input type="text" name="fname" value="">
  Last Name:<input type="text" name="lname" value="">
  Email:<input type="email" name="email" value="">
  <input type="submit" name="" value="submit">
</form>
</div>
</body>
</html>
