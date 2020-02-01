<?php include 'database.php' ?>
<?php session_start(); ?>

<?php 

if($_SESSION['ruolo'] !== 'admin'){

  header('Location: index.php');
}

?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home - Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <style>
        
        span.h1{ color: #fff}
        
        </style>
    </head>
    <body>
    
        
  
  <!-- As a heading -->
  <nav class="navbar navbar-dark bg-dark">
    <span class="h1" class="navbar-brand mb-0">Esempio di login</span>
    <span><!-- Button trigger modal -->
       <a href="logout.php"><button type="button" class="btn btn-danger">
            Logout
          </button></a></span>
  </nav>

<h1>AREA RISERVATA</h1>

 <h3>Ciao <?php echo $_SESSION['utente']; ?>, benvenuto/a nell'area di amministrazione</h3> 

        <!-- JS/jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
    </body>
</html>