<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<?php

$var="admin";
if($var=="admin"){    
?>

<p>
    Hello
</p>

<div class="user"> Hello Admin </div>

<?php
}
elseif($var=="subscriber"){
    ?>
    <div class="user"> Hello Subscriber</div>
    <?php
}
else{
    ?>
    <div class="user"> Hello Unauthorised person</div>
    <?php
}

if($var=="admin"||$var=="subscriber"){
    ?>
    <div class="match"> Authorization Matched</div>
    <div class="box"> 
        <h6>1. Access granted as admin</h6>
        <h5>2. Access granted as admin</h5>
        <h4>3. Access granted as admin</h4>
        <h3>4. Access granted as admin</h3>
        <h2>5. Access granted as admin</h2>
    </div>


    <?php
}
else{
    ?>
    <div class="match"> Authorization Not Matched</div>
    <div class="box"> 
        <h6>1. Access not granted as admin</h6>
        <h5>2. Access not granted as admin</h5>
        <h4>3. Access not granted as admin</h4>
        <h3>4. Access not granted as admin</h3>
        <h2>5. Access not granted as admin</h2>
    </div>
    <?php
}

?>

</body>
</html>