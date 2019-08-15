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


    $id = $_POST['id'];


    $u->id = $id;

    $u->deleteUser();





    ?>
</body>

</html>