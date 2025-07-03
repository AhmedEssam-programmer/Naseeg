<?php
session_start();
include('conn/connections.php');
if(isset($_POST['username']) && isset($_POST['password'])){
  $username = stripslashes(strtolower($_POST['username']));
  $password = stripslashes($_POST['password']);
  if (empty($username)) {
    $user_error = '<p id= "error">please enter your username</p>';
    $err_s = 1;
  }
  if (empty($password)) {
    $pass_error = '<p id= "error">please enter your password</p>';
    $err_s = 1;
  }

  if(!isset($err_s)){
    $sql ="SELECT id,username,password From users Where username = '$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row && $row['username'] === $username && $row['password'] === $password){
        $_SESSION['username'] = $row['username'];
        $_SESSION['id']= $row['id'];
        $_SESSION['password'] = $row['password'];
        header('location:home.php');
    }else {
        $username_error = '<p id= "error">wrong password or username</p>';
        include('index.php');
    } 
    }else{
        include('index.php');
        
    }

}
?>