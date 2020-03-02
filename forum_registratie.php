<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Forum Registratie</h1>
    <form action="registratie_handler.php" method="GET">
        <div style="display:flex;">
            <input type="text" name="naam">
            <label for="">Username</label>
        </div>
        <div style="margin-top:20px">
            <input type="email" name="mail">
            <label for="">Email</label>
        </div>
        <div style="margin-top: 20px">
            <input type="text" name="age">
            <label for="">Age</label>
        </div>
        <input type="submit" value="Submit">
        </form>
    
</body>
</html>