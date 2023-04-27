<?php
require_once "connection.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $countrycode = $_POST['countrycode'];
        $client_id = "CL".uniqid();

        $sql = "INSERT INTO users (name, username, email, phonenumber, password, gender, countrycode, client_id) VALUES ('$name', ?, '$email','$phonenumber', ?, '$gender','$countrycode','$client_id')";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set these parameters
            // if (isset($_POST['register'])) {
            //     $name = $_POST['name'];
            //     $email = $_POST['email'];
            //     $phonenumber = $_POST['phonenumber'];
            //     $gender = $_POST['gender'];
            //     $countrycode = $_POST['countrycode'];
            //     $sql1 = "INSERT INTO users (name, email, phonenumber, gender, countrycode) VALUES ('$name','$email','$phonenumber','$gender','$countrycode')";
            //     $a = mysqli_query($conn, $sql1);

                $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login_register.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
            
            
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}