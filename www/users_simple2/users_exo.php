<html>

<head>




    <meta charset="utf-8">
    <title>Users</title>





</head>

<body>

    <h1>Utilisateurs</h1>

    <?php
    // data source name = chaine de 

    $dsn = 'mysql:host=localhost;port=3306;dbname=db_users_simple;charset=utf8';


    /**@var PDO $dbConnect */
    $dbConnect = new PDO($dsn, "root", "");


    /**CONSIGNES :
     * 
     * si le parametre 'id' est fourni dans l 'url :
     * Afficher l utilisateur correspondant a l id < i class="afficher 'aucun resultat si aucun utilisateur n est trouve
     * 
     * Sinon 
     * afficher tous les utilisateurs
     * 
     */

    $id = $_GET['id'] ?? 0;

    $id = intval($id);


    if ($id > 0) {
        $statement = $dbConnect->query("SELECT*FROM users WHERE user_id=$id ");

        $user = $statement->fetch();

        if (!empty($user)) {

            echo $user['user_name'];
        } else {

            echo 'aucun resultat';
        }
    } else {
        // todo:afficher tou les utilisateurs

        $statements = $dbConnect->query("SELECT*FROM users ");

        while ($user = ($statement->fetch() !== false)) {



            echo '<h2>' . $user['user_name'] . '</h2>';
            echo $user['user-email'];
            echo '<hr>';
        }
    }



    ?>

</body>

</html>