<?php 
$patente=$_GET['patente'];

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
    <title>Gama</title>
    <style  href="css-sans-serif.css">
        body {
            background: black;
            font-family: sans-serif;
        }

        #auto {
            position: relative;
            margin: auto;
            max-width: 350px;
             width: 350px;
             height: 450px;
            
          
             text-align: center;
             align-items: center;
        }
        #auto a img {
            position: absolute;
            top :225px;
            left: 130px;
            height: 90px;
            width: 90px;
            border-radius: 100%;
          
        }
        header {
            margin:auto;
            position: relative;
           padding-top: 30px;
            width: 350px;
            height: 60px;

            
        }

        header #logo {
        
            width: auto;
            float: left;
        }
        header #exit {
            width: auto;
            float: right;
        }
        #patente {
            position: relative;
            margin: auto;
          text-align: center;
          padding-top: 20px;
           
            width: 350px;
            height: 104px;
            
            color: #CCCCCC;
        }
        #patente p {
            background: rgb(112, 27, 169,50%);
        }
        footer {

            position: relative;
            margin:auto;
            width: 350px;
            height: 50px;
          
            margin-top: 20px;
           text-align: center;

        }

    </style>
</head>
<header>
    <div id="logo">
     <img src="./asset/02.png" alt="">
    
    </div>
    <div id="exit">
     <!-- <a href="#"><img src="./asset/exit.svg" alt=""></a> -->
     <a href='<?php echo 'index.php?patente='.$patente; ?>'><img src="./asset/exit.svg" alt=""></a>
    </div>
 </header>
<div id="patente">
    <p><h2>Patente : <?php echo $patente; ?></h2></p>
</div>
<body>
    <div id="auto">
        <img src="./asset/a.svg" alt="">
         <!-- <a href="./abrir.html"><img src="./asset/cerrar boton.svg" alt=""></a> -->

         <a href='<?php echo "abrir.php?id_tracker=$id_tracker&patente=$patente"; ?>'><img src="./asset/cerrar boton.svg" alt=""></a>
    </div>
</body>

<footer>
    <img src="./asset/wit.svg" alt="">
</footer>

</html>