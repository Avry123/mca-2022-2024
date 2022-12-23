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
        <form action="showAndInsert.php" method="post">
            <input type="text" name="name" id="name" placeholder='Name'><br><br>
            <!-- <label for="email">Email:</label> -->
            <input type="email" name="email" id="email" placeholder='Email'><br><br>
            <!-- <label for="password">Password:</label> -->
            <!-- <input type="password" name="password" id="password" placeholder='Password'><br><br> -->
            <select name="Action" id="operation">
                <option value="Show">Show</option>
                <option value="Insert">Insert</option>
            </select>
            <input type="submit" name='submit' value="submit">
            <!-- <input type="reset" name='insert10' value="Insert"> -->
        </form>
    </div>
</body>
</html>