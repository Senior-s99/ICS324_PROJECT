<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>NOF</title>

    <?php
$cookie_name = "Sultan";
$cookie_value = 0;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


include("header.php");
include "db_conn.php";
if(isset($_SESSION["Username"]))
 echo "Welcome mr ". $_SESSION['Username'] . "<br>";
 else
 echo "Please Log in";

?>

</head>
<body>
 
<div class="padding30rem"> 


<?php

if(isset($_SESSION["Username"])) {
     echo "Welcome <strong>" . $_SESSION['Username'] . "</strong>!<br>";

     echo "Starting  date: " . date("Y/m/d") . "<br><br>";

     echo "Your days count are:<strong> " ."</strong> days <br><br>";
     echo "Today is " . date("Y/m/d") . "<br>";
}
else
echo"You Are  Not Loged in"

    
?>


</div>

</body>
</html>
</body>
</html>