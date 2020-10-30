<?php

function Capitales($pays)
{
    switch ($pays) {
        case "France":
            return "Paris";
            break;

        case "Allemagne":
            return "Berlin";
            break;
        case "Italie":
            return "Rome";
            break;

        case "Maroc":
            return "Rabat";
            break;

        case "Espagne":
            return "Madrid";
            break;

        case "Portugal":
            return "Lisbonne";
            break;

        case "Angleterre":
            return "Londres";
            break;
        default;
        case "Tout autre pays":
            return "Inconnu";
            break;
    }
}
