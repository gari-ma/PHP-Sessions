<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>

<?php
    // variables declarations
    $var="admin";
    $authMessage = "";
    $nextMessage = "";

    // case check
    if($var=="admin"){    
        $authMessage = "Authorization matched";
        $nextMessage = "Access granted as admin";
    }
    elseif($var=="subscriber"){
        $authMessage = "Authorization matched";
        $nextMessage = "You are subscriber";
    }
    else {
        $authMessage = "Authorization not matched";
        $nextMessage = "Enter your credentials";
    }
?>
<div classs="main"> 
    <div class="user"> Hello <?php echo $var;?> </div>
    <div class="match"> <?php echo $authMessage;?></div>
    <div class="box"> 
        <h5>1. <?php echo $nextMessage; ?></h5><br>
        <h4>2. <?php echo $nextMessage; ?></h4><br>
        <h3>3. <?php echo $nextMessage; ?></h3><br>
        <h2>4. <?php echo $nextMessage; ?></h2><br>
        <h1>5. <?php echo $nextMessage; ?></h1><br>
    </div>
</div>


</body>
</html>