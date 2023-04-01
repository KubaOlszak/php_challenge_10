<?php

session_start();
$errorLogout = '';
$successLogout ='';

if (empty($_POST['userLogin'])) {
    $_SESSION ['errorLogout'] = "Vous n'êtes pas authorisé à cette page. Anthnetifiez-vous d'abord.";
    header("location: login.php");
} else {
    $_SESSION = [];
    session_destroy();
    unset($_SESSION);
    header("location: login.php");
}
?>