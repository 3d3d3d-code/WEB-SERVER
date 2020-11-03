<html>

<head>




<meta charset="utf-8">
<title>Users</title>





</head>

<body>
    
<h1>Utilisateurs</h1>

<?php
// data source name = chaine de connexion

$dsn ='mysql:host=localhost;port=3306;dbname=bd_users_simple;charset=utf8';


/**@var PDO $dbConnect */
$dbConnect = new PDO($dsn,'root','');


/**CONSIGNES :
 * 
 * Si le parametre 'id' est fourni dans l 'url :
 * Afficher l utilisateur correspondant a l'id <i class="afficher 'aucun resultat si aucun utilisateur n est trouve
 * 
 * Sinon 
 * afficher tous les utilisateurs
 * 
 */


?>

</body>

</html>