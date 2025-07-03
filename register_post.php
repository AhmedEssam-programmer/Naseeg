<?php
include('conn/connections.php');
if (isset($_POST['submit'])) {
    $username = stripslashes(strtolower(trim($_POST['username'])));
    $email = stripslashes(strtolower($_POST['email']));
    $password = stripslashes($_POST['password']);
    $checker_user = "SELECT * FROM users where username = '$username'";
    $check_result = mysqli_query($conn, $checker_user);
    $num_rows = mysqli_num_rows($check_result);

    if ($num_rows != 1) {
        $user_error = '<p id= "error">sorry, username already exits.please choose another one.</p>';
        $err_s = 1;
    }

    if (empty($username)) {
        $user_error = '<p id= "error">please enter your username</p>';
        $err_s = 1;
    } else if (strlen($username) < 6) {
        $user_error = '<p id= "error">please enter your username more than 6 characters.</p>';
        $err_s = 1;
    } else if (filter_var($username, FILTER_VALIDATE_INT)) {
        $user_error = '<p id= "error">please valid username.</p>';
        $err_s = 1;
    }

    if (empty($email)) {
        $email_error = '<p id= "error">please enter your email</p>';
        $err_s = 1;
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = '<p id= "error">please valid email.</p>';
        $err_s = 1;
    }

    if (empty($password)) {
        $pass_error = '<p id= "error">please enter your password</p>';
        $err_s = 1;
    } else if (strlen($password) > 6) {
        $pass_error = '<p id= "error">please enter your password more than 6 characters.</p>';
        $err_s = 1;
    }

    if ($err_s == 1) {
        include('register.php');
    } else {
        $sql = "INSERT into users(username,email,password) values ('$username','$email','$password')";
        mysqli_query($conn, $sql);
        header('location: index].php');
        exit();
    }
}
?>
