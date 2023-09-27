<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Iniciar sesión</title>
</head>
<body>
  <div class="logo-peque">
    <img src="config.png" alt="Logo Pequeño" width="30px">
  </div>

  <?php
  
  $nombre = '';
  $password = '';
  $email = '';
  $pais = '';

  if (isset ($_POST['nombre'])) {

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $guardar = array();
    
    if ($nombre == "") {
        array_push($guardar,"El nombre no puede ir vacio");
    }
    
    if ($password == "" || strlen($password <7)) {
        array_push($guardar,"Contraseña vacia ó no tiene más de 7 caracteres");
    }
    
    if ($email == "" || strpos($email,"@")===false) {
        array_push($guardar,"Digite un correo valido");
    }

    if (count($guardar)>0) {
        for ($i=0; $i < count($guardar); $i++)  {
            echo "<li>".$guardar[$i]. "</li>";
        }
    }else   {
        echo "Datos Correctos";
    }
}
?>

  <div class="login-container">
    <h2>Iniciar sesión</h2>
    <img src="Disney+.png" width="300px">
    <form action="indexx/index.html" method="post">
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" name="nombre">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="password">
      </div>
      <button type="submit">Iniciar sesión</button>
    </form>
  </div>
  
  <script>
    const configButton = document.querySelector('.config-button');
  const body = document.body;

  configButton.addEventListener('click', () => {
      body.classList.toggle('modo-oscuro');
  });
</script>
<script src="scripts.js"></script>
</body>
</html>
