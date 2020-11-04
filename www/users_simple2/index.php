<html>

<head>
    <meta charset="utf-8">
    <title>Users</title>

</head>
   
<body>
    <h1>Utilisateur
    </h1>

    <?php

    //lecture du parametre d'url ou bien le resultat est 0 si le parametre n est pas fourni

    /**avant on ecrivait ca :
     * 
if(isset($_GET['id'])){
$id=$_GET['id'];

}else{

   $id=0;
}*/

    //maintenant on ecrit ca

    $id = $_GET['id'] ?? 0;

    // conversion en nombre entier
    $id = intval($id);

    // affichage de l'id
    echo $id;


    //affichage de la condition selon la valeur de l'id
    if ($id > 0) {


        echo 'L\'identifiant est ' . $id;
    } else {
        echo 'ZERO';
    }

    ?>
</body>


</html>