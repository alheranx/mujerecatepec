
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



    <div class="container-fluid">
        <div class="row mb-5 p-3">
            
                

            <?php
            $query = "SELECT * FROM mujeres";
            $stmt= $pdo->prepare($query);
            $stmt->execute();
            ?>
            
            
            
            <table class="table table-striped bg-white shadow table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Colonia</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">C.P.</th>
                    </tr>
                </thead>
                <tbody>
                    
                
                <?php
                while($rs=$stmt->fetch()){ ?>


                        <tr>
                            <td scope="row"><b class="text-primary"><?php echo sprintf('%05d', $rs['id']);  ?></b></td>
                            <td><?php echo $rs['nombre']; ?></td>
                            <td><?php echo $rs['direccion']; ?></td>
                            <td><?php echo $rs['colonia']; ?></td>
                            <td><?php echo $rs['email']; ?></td>
                            <td><?php echo $rs['telefono']; ?></td>
                            <td><?php echo $rs['cp']; ?></td>
                        </tr>


                        <!-- <div class="col-12 mb-3">
                            <div class="card">

                                <div class="card-header">
                                    Folio: <b class="text-primary"><?php echo sprintf('%05d', $rs['id']);  ?></b>
                                </div>
                                <div class="card-body">

                                    <p>
                                        <b>Nombre: </b><?php echo $rs['nombre']; ?><br>
                                        <b>Dirección: </b><?php echo $rs['direccion']; ?><br>
                                        <b>Colonia: </b><?php echo $rs['colonia']; ?><br>
                                        <b>E-mail: </b><?php echo $rs['email']; ?><br>
                                        <b>Teléfono: </b><?php echo $rs['telefono']; ?><br>
                                        <b>C.P.: </b><?php echo $rs['cp']; ?>
                                    </p>

                                </div>
                            </div>
                        </div> -->
                        
                    <?php } ?>


                </tbody>
            </table>
            
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>