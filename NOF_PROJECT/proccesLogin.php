<?php 


session_start(); 
$_SESSION["username"]= $_POST["name"];
$_SESSION["userPassword"]= $_POST["password"];

$user = $_SESSION["username"];
$pass = $_SESSION["userPassword"];

include "db_conn.php";

$sql = "SELECT * FROM usersInfo WHERE Username='$user' AND userPassword='$pass'";


        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $user && $row['userPassword'] === $pass) {

                echo "Logged in!";

                $_SESSION['Username'] = $row['Username'];

                $_SESSION['userPassword'] = $row['userPassword'];

                header("Location: index.php");

                exit();
            }}

                ?>