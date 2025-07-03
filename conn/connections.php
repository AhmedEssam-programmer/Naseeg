<?php 
$conn = mysqli_connect('localhost','root','','Naseeg');
if(!$conn){
    die('error'.mysqli_connect_error());
}else{
    echo'home.php';
}
?>