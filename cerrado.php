<?php
$patente=$_GET['patente'];
// $pasw=$_GET['password'];

// include("./conexion/conexion.php");
// $con = conectar();

// $sql = "SELECT *  FROM vehiculo where codigo=$pasw and patente='$patente'";
// $query = mysqli_query($con, $sql);

// $rows = mysqli_fetch_array($query);

// if (is_null($rows)){

//     echo "<script>alert('clave erronea')</script>";

//     header( "Location: ./index.php?patente=$patente" ) ;

// }

// echo "<script>alert('Clave correcta!')</script>";

//$id_tracker=$rows['id_tracker'];

// 
$id_tracker=$_GET['id_tracker'];
$estado="false";

include "./output-set.php";


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
        
        <title>AndesMar</title>
        <!-- <link rel="icon" type="image/x-icon" href="./favicon.png"> -->
    </head>
    <body>

        <!-- <input type="checkbox" id="cerrar">
        <label for="cerrar" id="btn-cerrar"></label>
        <div class="modal">
            <div class="contenido">
            <h2>Vehículo cerrado</h2>
            </div>
        </div> -->
        
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-2 text-center mt-3">
                    <a href='<?php echo 'index.php?patente='.$patente; ?>'>
                                <img class="borde-imagen" src="./arrow-back.svg" width="30px"
                                    alt="Volver">
                            </a>                  
                    </div>
                    <div class="col-8 text-center mt-3">
                        <!-- <img src="./Gama.svg" width="100px" alt="Gama"> -->
                    </div>
                    <div class="col-2 mt-3">
                        <a href='<?php echo 'index.php?patente='.$patente; ?>'>
                            <img class="borde-imagen-x" src="./Icon ionic-ios-close.svg"width="30px"
                                alt="Cerrar Sesion">
                        </a>
                    </div>
                </div>
            </div>
        </header>


        <div class="container">
            
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="cerrar-coche">
                        <a href="#modal" class="btn">
                            <img src="./Lock.svg"><img>
                        </a>
                        <!-- <a href="index5.html">
                            <img src="assets/img/Lock.svg" alt="Cerrado">
                        </a> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="abierto">
                    <a href='<?php echo "abierto.php?id_tracker=$id_tracker&patente=$patente"; ?>'>
                         <img src="./img/unlock.svg" alt="Abierto">
                         <div class="coche-cerrado">
                            <h6>Abrir</h6>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">

                  
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-12 text-center mt-5 mb-2">
                        <img src="./img/wit.svg" width="40px" alt="Wit">
                    </div>
                </div>
            </div>
        </footer>


       
  <div id="modal">
    <a href="#cerrar"></a>
      <div id="modalContent">
        <a href="#cerrar">x</a>
         <h3 style="color: #fff; text-align:center;">Vehículo cerrado</h3>
         <button type="button" data-bs-dismiss="modal">Aceptar</button>
      </div>
  </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>

</html>