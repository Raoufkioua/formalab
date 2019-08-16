<!Doctype html>
<html>

<head>

    <meta charset="utf8" />
    <title> home </title>
    <link rel="stylesheet" href="./style.css">


</head>

<body>
    <div class="container">
        <div class="row">
            <form name="formTest" method="POST" action=""> 
    <?php
    include "../php/user.php"; //importation
    $u = new user(); //instantiation
    $id = $_POST['id'];
    $u->id = $id;

    $u->updateUser();

    ?>
</body>

</html>