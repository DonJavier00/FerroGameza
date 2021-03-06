<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>recuperar contraseña</title>
</head>
<body>
    <main class="login-design">
        <div class="waves">
            <img src="assets/transparent.png" alt=""  />
        </div>
        <div class="login">
          <div class="login-data">
           
              <form action="#" class="login-form">
                <img src="assets/contrasena.png" alt="" />
                <div class="recuperar_contrasena_txt">
                <h1>Recuperar contraseña</h1>
                </div>

              <div class="input-group">
                <label class="input-fill">
                  <input type="email" name="email" id="email" required />
                  <span class="input-label">Correo</span>
                  <i class="fas fa-envelope"></i>
                </label>
              </div>
              <div class="btn-login_enviar">
              <a href="cambiar.php">Enviar</a>
            </div>
            
            <div class="ya_tienes_una_cuenta">
              <p>Ya tienes una cuenta? </p>
              <a class="ya_tienes_una_cuenta_btn" href="index_login.php"><u>Iniciar Sesion</u></a>
             </div>
                
                
              </div>
             
            </form>
              
          </div>
        </div>
    </main>
    
</body>
</html>