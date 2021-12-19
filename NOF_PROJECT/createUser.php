<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


$newName = mysqli_real_escape_string($conn, $_POST['name']);
$newPassword = mysqli_real_escape_string($conn, $_POST['password']);
$newEmail = mysqli_real_escape_string($conn, $_POST['email']);




    
$sql = "INSERT INTO usersInfo (Username, UserPassword, email)
VALUES ('$newName', '$newPassword', '$newEmail')";

if (mysqli_query($conn, $sql)) {
    echo "New user created successfully, redirecting you to home page...";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
  header("refresh:5;url=index.php");

?>