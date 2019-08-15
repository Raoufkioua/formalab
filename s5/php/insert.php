<!Doctype html>
<html>

<head>

    <meta charset="utf8" />
    <title> home </title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

    <?php
    include "../php/user.php"; //importation
    $u = new user(); //instantiation

    /*echo "<h1>Bonjour</h1>";
$x=200;
$y=800;

echo "la somme de $x + $y =".somme($x,$y)." <br>";
echo 'la somme de '.$x.'+'.$y.'='.($x+$y);

function somme ($a,$b){

    return $a+$b;
}*/

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    $u->nom = $nom;
    $u->prenom = $prenom;
    $u->age = $age;
    $u->insertUser();

    //echo "$nom $prenom $age <br>";
    //echo "$u->nom $u->prenom $u->age";
   /* $u->direBonjour($nom);
    $u->direBonjour1();
    //fonction statique
    User::hello();/*

    $u->insertUser();
    /*$u->deleteUser();
    $u->updateUser();
    $u->readOneUser();
    $u->readAllUser();*/



    ?>
</body>

</html>