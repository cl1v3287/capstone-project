<?php
$con = mysqli_connect('localhost','root','','strongpasswords');

$passwordlength = $_POST['password-length'];
$password = randomPassword($passwordlength);

$check_data = mysqli_query($con, "INSERT INTO passworddata (password, length) VALUES ('$password', '$passwordlength')");

echo $password;


function randomPassword($length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_-+=]}[{';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}




?>