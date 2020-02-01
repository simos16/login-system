<?php include 'database.php' ?>


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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">
            Accedi
          </button></span>
  </nav>



  <!-- Modal per login form -->

  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Entra nell'area riservata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <!-- Form per il login -->
        
           <form action="login.php" method="post">
            <div class="form-group">
              
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci il tuo username" name="username">
              
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserisci la tua password" name="password">
            </div>
            
            <button type="submit" class="btn btn-success" name="login">Accedi</button>
          </form>

        </div>
       
      </div>
    </div>
  </div>

        <!-- JS/jQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> 
    </body>
</html>