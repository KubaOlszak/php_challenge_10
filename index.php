<?php

session_start();
$_SESSION ["errorIndex"] = '';


if (empty($_SESSION['login'])) {
    $_SESSION ["errorIndex"] = "Vous n'êtes pas authentifié.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu
<?php
if (!empty($_SESSION ["errorIndex"])) {
    echo ' Donkey';
} else {
    echo ' ' . $_SESSION['login'];
}
?>
    </title>
</head>
<body>
    <h2>Bienvenue sur index.php</h2>
<?php
if (!empty($_SESSION ['login'])) {
    echo 'Vous êtes authentifé.' . '<a href="logout.php" target="_self">' . 'Logout' . '</a>';
} else {
    echo $_SESSION ["errorIndex"] . ' ' . '<a href="login.php" target="_self">' . 'Go back' . '</a>';
}
/*
if (isset($_SESSION ["errorIndex"])) {
    echo $$_SESSION ["errorIndex"] . ' ' . '<a href="login.php" target="_self">' . 'Go back' . '</a>';
} elseif (isset($_SESSION['login'])) {
    echo 'Vous êtes authentifé.' . '<a href="logout.php" target="_self">' . 'Logout' . '</a>';
}
*/
?>
</body>
</html>