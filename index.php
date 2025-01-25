<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Handling</title>
</head>
<body>
    <form action="submit.php" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName">
        <br><br>
        <label for="secondName">Second Name:</label>
        <input type="text" id="secondName" name="secondName">
        <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
        <button action="submit.php">Submit</button>
    </form>
</body>
</html>
