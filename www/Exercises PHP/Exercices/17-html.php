<?php
$prenoms = array('Mike', 'Franck', 'Sophie');
/*  
si ma collection est vide,j'affiche 'Aucun resultat'
j'affiche le titre fourni en argument 1 dans une balise<h3>
j'affiche une balise <ul>
je parcours le tableau
chaque element du tableau est affiche dans un <li>
j'affiche ma balise</ul>
*/

function  Htm_List(string $title, array $collection)
{
    if (empty($collection)) {
        echo 'Aucun resultat';
    } else {
        echo "<h3>$title</h3>";
        echo "<ul>";
        for ($i = 0; $i < count($collection); $i++) {
            $item = $collection[$i];

            echo "<li>$item</li>";
        }
        echo  "</ul>";

        // ou bien avec un foreach
    }
    if (empty($collection)) {
        echo 'Aucun resultat';
    }
    echo "<h3$title</h3>";
    echo "<ul>";

    foreach ($collection as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
