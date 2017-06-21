<?php
    $name = $email = $username = $password = "";
    $nameErr = $emailErr = $usernameErr = $passwordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } 
        else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }
        else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } 
        else {
            $username = test_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required"; 
        }
        else {
            $password = test_input($_POST["password"]);
        }
    }
    


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }


?>