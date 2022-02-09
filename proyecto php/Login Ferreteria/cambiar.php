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
    <title>restablecer contraseña</title>
  </head>
  <body>
    <main class="login-design">
      <div class="waves">
        <img src="assets/transparent.png" alt=""  />
      </div>
      <div class="login">
        <div class="login-data">
         
            <form action="#" class="login-form">
              <img src="assets/trabajador.png" alt="" />
              <h1>Restablecer contraseña</h1>
              
            <div class="input-group">
              <label class="input-fill">
                <input type="password" name="password" id="password" required />
                <span class="input-label">Nueva contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
              
            </div>
              <div class="input-group">
              <label class="input-fill">
                <input type="password" name="password" id="password" required />
                <span class="input-label">Confirmar nueva contraseña</span>
                <i class="fas fa-lock"></i>
              </label>
            
            </div>
 
            <div class="btn-login_guardar_contrasena">
              <a href="../registrar producto/index.php">Guardar</a>
            </div>
            <div class="iniciar_sesion_existe_cuenta">
              <p>ya tienes una cuenta? </p>
              <a class="recuperar_iniciar_sesion" href="index_login.php"><u>Iniciar Sesion</u></a>
             </div>
            
              
          </form>
        </div>
      </div>
    </main>
  </body>
</html>