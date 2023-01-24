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

  h1 {
    margin: 20px;
  }

  </style>
  <body>
    <h1>Fill out the details</h1>
    name:<input id="name" type='text' name='name'>
    address:<input id="address" type="text" name="address">
    email:<input id="email" type='email' name='email'>
    password:<input id="password" type='text' name='pass'>
    <button onclick="myfunction()">Submit</button>
    <h1 id="message1"></h1>
    <h1 id="message2"></h1>
    <h1 id="message3"></h1>
      <h1 id="message4"></h1>
  </body>
  <script>
  function myfunction() {
    var password = document.querySelector("#password");
      var email = document.querySelector("#email");
        var name = document.querySelector("#name");
       var address = document.querySelector("#address");
    var message1 = document.querySelector("#message1");
      var message2 = document.querySelector("#message2");
        var message3 = document.querySelector("#message3");
         var message4 = document.querySelector("#message4");

    message1.innerHTML = "Welcome to my  " + name.value;
    message2.innerHTML = "email is " + email.value;
    message3.innerHTML = "password is  " + password.value;
    message4.innerHTML = "address is " + address.value;
  }

  </script>
</html>
