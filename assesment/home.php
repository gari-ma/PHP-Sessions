<?php 
$username = $_GET["username"];
$password = $_GET["password"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">

    <style>
        img {
            width: auto;
            height: 100px;
        }
    </style>
</head>

<?php
    if($username=="admin" || $password=="admin"){
?>
<body>
    <div class="admin">
        <h1>Garima Bhattarai</h1>
        <a href="index.php">logout</a>
        <hr>
        <p>Welcome admin    </p>
        <img src="https://thumbs.dreamstime.com/b/word-admin-made-wood-building-blocks-background-financial-graphs-charts-word-admin-made-wood-building-blocks-222862132.jpg" >
    </div>
    
<?php
    }
    else {
    ?>
    <div class="user">
    <h1>Hello User</h1>
    <hr>
    <div class="box">
    <p>Incorrect credentials</p>
    <br>
    <a href="index.php">Try again</a>
    </div>
<?php
}
?>
</body>
</html>