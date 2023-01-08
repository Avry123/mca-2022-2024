<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fileHandling.php" method="post">
       <select name="file_operation" id="file_operation">
        <option value="read">Read the reviews of other people</option>
        <option value="write">Write your own review</option>
        <option value='create'>Create your own Blog.</option>
        <option value='read_blog'>Read my blog</option>
        <option value='continue_blog'>Continue with the blogs.</option>
       </select>
       <button type="submit">Submit</button>
    </form>
</body>
</html>