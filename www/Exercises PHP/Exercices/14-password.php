<?php

//Exercice 14


function PassordLength(string $password)
{
    if (strlen($password) >= 8) {

        return true;
    } else {

        return false;
    }
}
//Exercice 15

function  PasswordCheck(string $password)
{
    if (PassordLength($password) && $password > 0 && strtolower($password) > 0 && strtoupper($password) > 0) {

        return true;
    } else {
        echo 'Mot de passe incorrect !';
    }
}
