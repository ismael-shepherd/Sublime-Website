<?php

use App\Get;

require '../vendor/autoload.php';

$title = 'DashBoard | SublimeLife';

$users = Get::getPDO()->query('SELECT * FROM users')->fetchAll();
$auth = Get::getAuth()->user();
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'DashBoard | SublimeLife' ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="p-4">
<a href="logout.php">Se déconnecter</a>
    <h1>Accèder aux pages</h1>

    <?php if(isset($_GET['login'])): ?>
        <div class="alert alert-success">
            Vous etes bien connecter
        </div>
        <?php endif ?>

        <?php if (!empty($user)): ?>
            <p>
            Vous etes connecté en tant que <?= $user->username ?> -
            <a href="logout.php">Se déconnecter</a>
            
            </p>
        <?php endif ?>

    <ul>
        <li><a href="admin.php">Page réservée à l'administrateur</a></li>
        <li><a href="user.php">Page réservée à l'utilisateur</a></li>
    </ul>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['role'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>