<html>

<head>
    <meta charset="utf-8">
    <title>Users</title>

</head>

<body>
    <h1>Utilisateurs
    </h1>

    <?php
    //data source name = chaine de connexion
    $dsn = 'mysql:host=localhost ;port=3306dbname=db_users_simple;charset=utf8'; //3 paires  cle/valeur;

    // Connexion a une base de donnees
    /**@var PDO $dbConnect*/

    $dbConnect = new PDO($dsn, 'root', '');


    // var_dump($dbConnect);


    // execution d une requete SQL




    $statement = $dbConnect->query("SELECT*FROM users;");

    //var_dump($statement);

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    /*echo '<pre>';
var_export($users);
echo'</pre>';*/

    foreach ($users as $user) {
        echo '<h2>' . $user['user_name'] . '</h2>';
        echo $user['email'];
        echo '<hr>';
    }



    ?>
</body>


</html>