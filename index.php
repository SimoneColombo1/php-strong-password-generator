<?php

$login = [
    [
        "username" => "gino",
        "password" => "albertos001",


    ],

    [
        "username" => "stoppo",
        "password" => "bromvo",


    ],

    [
        "username" => "pino",
        "password" => "bebus",


    ],

    [
        "username" => "ginozzo",
        "password" => "albertozzodiddio",


    ],

];
session_start();


$_POST['user'];
$_POST['pass'];

foreach ($login as $utente) {

    if ($utente["username"] === $_POST['user']  && $utente["password"] === $_POST['pass']) {

        $_SESSION['username']  = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['log'] = true;
        Header("Location: ./logged.php");
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>

        <h1>EFFETUA L'ACCESSO</h1>
    </header>

    <main>

        <form action="./index.php" style="display: flex; flex-direction:column;" method="post">
            <input type="text" name="user" id="user" style="width:12rem;">
            <label for="user">Username</label>
            <input type="text" name="pass" id="pass" style="width:12rem;">
            <label for="user">Password</label>
            <input type="submit" style="width: 4rem;">
        </form>

    </main>

</body>

</html>