<?php

define('tmpLogin', 'Alf');
$errorMessage = '';

//vérification
if ($_POST) {

    if (!empty($_POST['userLogin'])) {

        if ($_POST['userLogin'] !== tmpLogin) {
            $errorMessage = '<i>Login erroné . => Alf</i>';
        } else {
            session_start();
            $_SESSION['login'] = tmpLogin;
            header("location: index.php");
            exit();
        }

    } else {
        $errorMessage = "Veuillez d'abord vous authentifier : ";
    }
}

if (isset($_SESSION ['errorLogout'])) {
        $errorMessage = $_SESSION ['errorLogout'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu Donkey</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <span><a class="logout" href="./logout.php" target="_blank">Logout</a></span>
                <span><a class="index" href="./index.php">Index</a></span>
                <br>
                <br>
            </div>
        </nav>
    </header>
    <p>
<?php
    if (isset($errorMessage)) {
        echo $errorMessage;
    }
?>
    </p>
    <form action="" method="post">
        <div>
            <label for="userLogin">Login : </label>
            <input type="text" id="userLogin" name="userLogin" placeholder="Votre login" size="30">
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    
</body>
</html>