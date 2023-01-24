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
    justify-content: center;
    align-items: center;
  }

  div {
    width: 750px;
    height: 750px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #DB6B97;
  }

   form {
     display: flex;
     flex-direction: column;
     justify-content: center;
     text-align: center;
   }

   .button {
     width: 50px;
     height: 25px;
     margin-left: auto;
     margin-right: auto;
     margin-top: 20px;
     margin-bottom: 20px;
   }

   input {
     margin: 20px;
   }

  </style>
  <body>
    <div>
    <form class="" action="loginup.php" method="post">
      email <input type="email" name="email" value="">
      password <input type="text" name="password" value="">
      <input type="submit" name="" value="submit">
      <a href="sign.php">Sign up</a>
    </div>
    </form>
  </body>
</html>
