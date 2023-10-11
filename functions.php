<?php
$passwordLength = (int)$_GET['length'];
var_dump($passwordLength);

function getRandomPassword($passwordLength)

{

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    for ($i = 0; $i < $passwordLength; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
    var_dump($password);
}
