<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    <?php 
   if (isset($_GET['submit'])&& $_SERVER["REQUEST_METHOD"] == "GET") {

    if(empty($password)){
        echo 'Error! Ingrese su contraseña';
    }else{
    $password = ($_GET["password"]);
    header("url=index3.html");
    }
}
    ?>
</body>
</html>