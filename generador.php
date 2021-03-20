<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Directorios y Archivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Generador de Directorios y Archivos</h1>
    <?php
    
    if (isset($_POST['generador']) == 'procesar'){

    // variables
    $carpeta = $_POST['directorio'];
    $validar_nombre_archivo = $_POST['archivo'];
    $archivo = $_POST['archivo']. ".txt";
    $texto = $_POST['texto'];
    $ruta = ($carpeta . "/" . $archivo);
    
    


    if (!empty($carpeta) && !empty($validar_nombre_archivo)) {
    //Creacion de la carpeta
        if (!file_exists($carpeta)) {
            mkdir($carpeta);
            echo ("<h3>Carpeta creada exitosamente</h3>");
            echo ("<br><h3>Nombre de la carpeta creada: </h3>" .$carpeta);
        } else {
            echo ("<h3>Carpeta ya existe</h3>");
            echo ("<br><h3>Nombre de la carpeta: </h3>" .$carpeta);
        }

    //Cambio de directorio
    chdir($carpeta);
    


    //Creacion del archivo
        if (!file_exists($archivo)) {
            $fp = fopen($archivo, "w");
            echo ("<br><h3>Nombre del archivo creado: </h3>" .$archivo);

        } else {
            echo("<br><h3> El archivo a crear ya existe</h3>");
            echo("<h3>El contenido del archivo ha sido cambiado</h3>");
            $fp = fopen($archivo, "w+");
        }

        fwrite($fp, $texto);
 }else {
        echo("<h3>Por favor rellene todos los campos</h3>");
    }

    echo ("<a href=dwl.php?file=".$archivo."&folder=".$carpeta."><button>Descargar</button></a>");; } 
    ?>

    <div id="regresar">
    <a href="index.php"><button>Regresar</button></a>
    </div>
</body>
</html>