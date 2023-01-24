<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up Page.</title>
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

  </style>
  <body>
    <div>
    <form class="" action="signup.php" method="post">
      email <input type="email" name="email" value="">
      password <input type="text" name="password" value="">
      <input class="button" type="submit" name="" value="submit">
    </form>
    <a href="login.php">Login</a>
  </div>
  </body>
</html>
