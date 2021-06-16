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
  <title>Log-In</title>
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
            <h4>Ingreso</h4>
            <a title="Si ya te registraste, podes ingresar con tu MAIL y tu número de DNI" href="#"><i class="small material-icons right">live_help</i></a>
            <div class="row">
              <form action="controladores/gestion_usuarios.php" method="POST">
                <input hidden type="text" name="action" value="login">
              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="user">
                    <label for="autocomplete-input">Usuario</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="text" id="autocomplete-input" class="autocomplete white-text" name="password">
                    <label for="autocomplete-input">Contraseña</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-action center-align">
            <button class="btn waves-effect waves-light" type="submit">Iniciar Sesión
              <i class="material-icons right">verified_user</i>
            </button>
          </div>
        </form>
          <div class="card-action center-align">
            <a class="waves-effect waves-teal btn-flat" href="index.php">Registrarme</a>
            <a class="waves-effect waves-teal btn-flat">Olvide mi Contraseña</a>
          </div>
        </div>
      </div>
      <div class="col m3 l3"></div>
    </div>
  </div>
  <?php if(!empty($_SESSION['login']) && $_SESSION['login']){?>
      <script>
        Swal.fire({
          icon: 'error',
          title: 'Informacion Incorrecta',
          showConfirmButton: false,
          timer: 1500
        });
      </script>
  <?php 
  } ?>
</body>

</html>