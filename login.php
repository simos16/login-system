<?php include 'database.php' ?>
<?php session_start(); ?>

<?php 

if(isset($_POST['login'])){

//     echo "tutto ok!";

// }else{

//     echo "qualcosa non va!";
// }

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($connessione , $username);
$password = mysqli_real_escape_string($connessione , $password);

$query = "SELECT * FROM utenti WHERE username = '{$username}' ";

$trova_utente = mysqli_query($connessione , $query);

if(!$trova_utente){

    die('RICHIESTA FALLITA' . mysqli_error($connessione));
}

while($row = mysqli_fetch_array($trova_utente)){

$idUtente = $row['id'];
$nomeUtente = $row['username'];
$passUtente = $row['password'];
$ruoloUtente = $row['ruolo'];
}

if($username === $nomeUtente && $password === $passUtente){

    $_SESSION['utente'] = $nomeUtente;
    $_SESSION['password'] = $passUtente;
    $_SESSION['ruolo'] = $ruoloUtente;
    

    header('Location: area_riservata.php');
}else{
    header('Location: index.php');

}
}

?>