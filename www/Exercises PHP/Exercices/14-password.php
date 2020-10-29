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
    if(PassordLength($password) && $password>0 && str ){

        return true;
    }
}

