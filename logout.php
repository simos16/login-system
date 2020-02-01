
<?php session_start(); ?>


<?php 

$_SESSION['utente'] = null;
$_SESSION['password'] = null;
$_SESSION['ruolo'] = null;

header('Location: index.php');

?>