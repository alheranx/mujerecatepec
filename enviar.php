
<?php
$tabla_usuarios = "usuarios";
$carpeta_thumb = "../subidas/th";
$carpeta_imagen = "../subidas";
$tabla_categorias = "categorias";
$tabla_subcategorias = "subcategorias";

$servidor_mysql = "35.239.43.80";
$usuario_mysql = "root";
$password_mysql = "betomxio";
$base_mysql = "mujerecatepec";

try {
    $pdo = new PDO('mysql:host='.$servidor_mysql.';dbname='.$base_mysql, "$usuario_mysql", "$password_mysql");
    // echo "Conectado ...";
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./style.css">
    

    <title>Escuela de manejo para mujeres</title>



  </head>
  <body>
    <div class="jumbotron jumbotron-fluid shadow">
        <div class="container">
          <!-- <h1 class="display-4">Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->

          <div class="row">
              <div class="col-6 offset-3 col-md-4 offset-md-4">
                    <img src="./img/logotipo.png" alt="" class="w-100">
              </div>
          </div>
        </div>
      </div>



    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-4 offset-md-4">
                

            <?php
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $direccion = $_POST['direccion'];
            $colonia = $_POST['colonia'];
            $cp = $_POST['cp'];


            $mensaje = "
            Nombre: ".$nombre."<br>
            telefono: ".$telefono."<br>
            email: ".$email."<br>
            direccion: ".$direccion."<br>
            colonia: ".$colonia."<br>
            cp: ".$cp."<br>
            " ;

            // echo $mensaje;


            $query = "insert into mujeres (nombre, email, telefono, direccion, cp, colonia) values ('$nombre', '$email', '$telefono', '$direccion', '$cp', '$colonia');";

            $stmt= $pdo->prepare($query);
            $stmt->execute();
            ?>



            
                <div class="alert alert-success">
                    Se envió correctamente tu registro, nos pondremos en contacto contigo.
                </div>
            

            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>