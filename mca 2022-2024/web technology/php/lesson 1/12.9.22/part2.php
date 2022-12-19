
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="part1.css">
</head>
<body>
    <div>
        <!-- <form action="" method="get"></form> -->
        <form action="newPage.php" method='GET'>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="submit">
            <input type="reset">
            <br><br>
            <a href='registeration.php'>New User? Register Here.</a>
        </form>
    </div>
</body>
</html>