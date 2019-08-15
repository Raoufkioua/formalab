<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./../css/bootstrap.css">

    <title>Document</title>
</head>

<body>


    <?php
    require_once "./user.php";
    $result = user::readAll();
    if ($result->rowCount() == 0) {

        echo " Rien à affichier ";
    }
    ?>
    <table class="table table-secondary">
        <br><br />
        <thead>
            <tr>
                <th widh="100">nom</th>
                <th widh="100">prenom</th>
                <th widh="100">age</th>
            </tr>

        </thead>
        <?php
        while ($user = $result->fetchObject()) { // pour mettre les tableau sqlsous forme dun objets utirable et on le designe au users pour le parcoru
            ?>
        <tr>
            <td><?php echo $user->nom ?></td>
            <td><?php echo $user->prenom ?></td>
            <td><?php echo $user->age ?></td>
        </tr>
        <?php
        }
        ?>
</body>
</table>


</body>

</html>