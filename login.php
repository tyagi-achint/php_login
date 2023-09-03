<?php
include 'server.php';

$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}
if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

    $log = "SELECT `password` FROM `php_project`.`login_form` WHERE `username` = '$username';";
    $fetchPassword = mysqli_fetch_assoc(mysqli_query( $con,$log));
    if ( $fetchPassword['password']== $password){
    $messageSuccess = true;
        }
        else{
            $messageError = true;
        }
}
$con->close();
include 'page.php';


?>
