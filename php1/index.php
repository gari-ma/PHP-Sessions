<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel ="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $role = $_GET['user'];

        if($role == "admin") {
            ?>

<b>Admin </b>

            <?php
        } 
        else if($role == "subs") {
            ?>
<div class="role">Not Admin</div>

<?php  
        }
        else {
            echo "Admin Access Not Available";
        }
    ?>



<?php
    for($i=0;$i<=5;$i++){
        echo " <b>HEllo I am  Garima Bhattarai <br>";
    }
?>

<div id="boxxa"></div>

<script>
    var x = document.getElementById("boxxa");
    for(i = 0; i < 5; i++) {
        x.innerHTML += "<p>Hello</p><br>"
    }
</script>


</body>
</html>