<?php
include 'server.php';
$con=mysqli_connect($server,$username,$password);
if (!$con){
    die("Could not connect to server" .mysqli_connect_error());
}

if (isset($_POST['username'])){
$name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
$confirmPassword = $_POST['confirmPassword'];


if (confirmPassword($password, $confirmPassword)){
    
    $sql = "INSERT INTO `php_project`.`login_form` ( `name`, `username`, `email`, `password`, `dob`, `time`) VALUES ('$name', '$username', '$email', '$password', '$dob', CURRENT_TIMESTAMP);";
    if ($con->query($sql)== true){
        $messageSuccess = true;

        }
        else{
            $messageError = true;

        }
    }
    else{
        newUser();
    }
}
$con->close();

include 'page.php';

?>
