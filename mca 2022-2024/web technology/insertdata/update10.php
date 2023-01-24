<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  body {
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  </style>
  <body>
      <h1>Update the results</h1>
    <form action="update20.php" method="post">
      id<input type='number' name='id'>
      Team<input type='text' name='team'>
      Match date<input type='text' name='date'>
      <input type='submit' value='submit'>
    </form>
  </body>
</html>
