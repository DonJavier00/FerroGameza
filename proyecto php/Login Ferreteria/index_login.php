<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/normalize.css" />
    <title>Login</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves">
        <img src="assets/transparent.png" alt=""  />
      </div>
      <div class="login">
        <div class="login-data">
         <form action="#" class="login-form">
              <img class="imagen_login"src="assets/trabajador.png" alt="" />
              <h1>Inicio de Sesión</h1>
            
            <select class="seleccionar_rol_login" id="">
              <div class="op">
              <option class="seleccionar_rol_login_selec" disabled selected>Seleccione rol </option>
              <option value="">Administrador</option>
              <option value="">Empleado</option>
            </div>
            </select>

            <div class="input-group">
              <label class="input-fill">
                <input type="email" name="email" id="email" required />
                <span class="input-label">Correo</span>
                <i class="fas fa-envelope"></i>
              </label>
            </div>
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="password" id="password" required />
                <span class="input-label">Contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            </div>
        
 
            <div class="btn-login">
              <a href="../registrar producto/index.php">iniciar Sesion</a>
            </div>
          
            <div class="olvido_contrasena">
              <p>Olvido su contraseña? </p>
              <a class="recuperar_contrasena_btn" href="recuperar.php"><u>Recuperar contraseña</u></a>
             </div>
          </form>
        </div>
      </div>
    </main>
    <script src="bloqueo.js"></script>
  </body>
</html>
