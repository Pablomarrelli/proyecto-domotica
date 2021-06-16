<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- SWEET ALERT 2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- JS -->
  <script src="js/jquery-3.5.1"></script>  
  
  <title>Registrar</title>
</head>

<body>
  <!-- Navbar goes here -->
  <!-- <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav> -->
  <!-- Page Layout here -->
  <div class="container">
    <div class="row">
      <div class="col m3 l3"></div>
      <div class="col s12 m6 l6">
        <div class="card grey darken-4">
          <div class="card-content white-text">
            <h4>Registro</h4>
            <div class="row">
              <form action="controladores/gestion_usuarios.php" method="POST">
                <input hidden type="text" name="action" value="registrar">
              <div class="col s12">
                
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="nombre">
                    <label for="autocomplete-input">Nombre</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="apellido">
                    <label for="autocomplete-input">Apellido</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">picture_in_picture</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="dni">
                    <label for="autocomplete-input">DNI</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">mail</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="correo" required>
                    <label for="autocomplete-input">Correo</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">local_phone</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="telefono">
                    <label for="autocomplete-input">Telefono</label>
                  </div>
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="password">
                    <label for="autocomplete-input">Contraseña</label>
                  </div>
              </div>
            </div>
          </div>
          <div class="card-action center-align">
            <button  id="registrar" class="btn waves-effect waves-light" type="submit">Registrarme
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
          <div class="card-action center-align">
            
            <a class="waves-effect waves-teal btn-flat" href="login.php">Ingresar</a>
            <a class="waves-effect waves-teal btn-flat">Olvide mi Contraseña</a>
         
          </div>
        
      </div>
      <div class="col m3 l3"></div>
    </div>
  </div>
      <script>
      $( "#registrar" ).click(function() {
        Swal.fire({
          icon: 'success',
          title: 'Registrado satisfactoriamente',
          showConfirmButton: false,
          timer: 1500
        });
    });  
      </script>
</body>

</html>