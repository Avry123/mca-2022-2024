<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="no">Roll No</label>
        <input type="number" name="no" id="no">
        <label for="player_name">Player Name: </label>
        <select name="player_name" id="player_name">
            <option value="player1">Player 1</option>
            <option value="player2">Player 2</option>
            <option value="player3">Player 3</option>
            <option value="player4">Player 4</option>
            <option value="player5">Player 5</option>
        </select>
        <select name="team_name" id="team_name">
            <option value="team1">Team 1</option>
            <option value="team2">Team 2</option>
            <option value="team3">Team 3</option>
            <option value="team4">Team 4</option>
            <option value="team5">Team 5</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>