<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content+="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <form action="info.php" method="post">
            <input type="text" name="name" id="name" placeholder='Name'><br><br>
            <!-- <label for="email">Email:</label> -->
            <input type="email" name="email" id="email" placeholder='Email'><br><br>
            <!-- <label for="password">Password:</label> -->
            <input type="password" name="password" id="password" placeholder='Password'><br><br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
    </div>
</body>
</html>