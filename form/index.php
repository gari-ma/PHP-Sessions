<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <h1>My form</h1>
    <form action="receiver.php" method="post">
        <label for="Name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name"> <br><br>

        <label for="Gender">Gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female <br><br>

        <label for="DOB"> DOB :</label>
        <input type="date" name="dob" placeholder="Enter your birth date"><br><br>

        <label for="favcolor"> Fav color: </label>
        <input type="color" name="Fav color" placeholder="Enter your Fav color"><br><br>
        
        <button type="submit">Submit</button>
        
        
    </form>
    
</body>
</html>