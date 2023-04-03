<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" type="text/css" href="authorization/home.css">
</head>
<body>

<?php

$var="subscriber";
if($var=="admin"){    
?>

<div class="user"> Hello Admin </div>
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
elseif($var=="subscriber"){
    ?>
    <div class="user"> Hello Subscriber</div>
    <div class="match"> Authorization Matched</div>
    <div class="box"> 
        <h6>1. Access granted as subscriber</h6>
        <h5>2. Access granted as subscriber</h5>
        <h4>3. Access granted as subscriber</h4>
        <h3>4. Access granted as subscriber</h3>
        <h2>5. Access granted as subscriber</h2>
    </div>
    
    <?php
}
else{
    ?>
    <div class="user"> Hello Unauthorised person</div>
    <div class="match"> Authorization Not Matched</div>
    <div class="box"> 
        <h6>1. ENTER YOUR CRENDTIALS AGAIN </h6>
        <h5>2. ENTER YOUR CRENDTIALS AGAIN </h5>
        <h4>3. ENTER YOUR CRENDTIALS AGAIN </h4>
        <h3>4. ENTER YOUR CRENDTIALS AGAIN </h3>
        <h2>5. ENTER YOUR CRENDTIALS AGAIN </h2>
    </div>
    <?php
}?>

</body>
</html>