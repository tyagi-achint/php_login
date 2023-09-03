<?php
include 'server.php';
$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}
if (isset($_POST['username'])){
$confirmPassword = $_POST['confirmPassword'];
$username = $_POST['username'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$email = $_POST['email'];

if (confirmPassword($password, $confirmPassword)){
   


    $checkingUser = "SELECT  `sno` FROM `php_project`.`login_form` WHERE `username` = '$username' AND `email` = '$email' AND `dob` = '$dob';";
    $result =mysqli_query( $con,$checkingUser);
    $fetchUser = mysqli_fetch_assoc($result);
    $sno = $fetchUser['sno'];

    if($sno !== NULL){
        $changePasssword = "UPDATE `php_project`.`login_form` SET `password` = '$password' WHERE `sno` = '$sno';";

        if ($con->query($changePasssword)== true){
        $messageSuccess = true;
            }}
        else  {
                $messageError = true;
            }

        
        
    }
    else{
        forgotPass();
    }
}
$con->close();

include 'page.php';


?>

