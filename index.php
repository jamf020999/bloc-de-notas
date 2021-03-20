<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad+++</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 align="center">Generador de directorios y carpetas</h1> <br><br>
<form method="POST" action="generador.php">
<table border="1" align="center">
<tr>
        <td>Nombre del archivo a crear</td>
        <td><input type="text" name="archivo"></td>
    </tr>
    <tr>
        <td>Texto del archivo:</td> 
        <td><input type="text" id="textarea" name="texto" placeholder=""></td>
    </tr>
    <tr>
        <td>Carpeta:</td> 
        <td><input type="text" name="directorio"></td>
    </tr>
</table>
<table border="1" align="center">
    <tr>
       <td><input type="submit" class="btn" name="generador" value="procesar"></td>
       <td><input type="reset" class="btn" name="limpiar" value="Limpiar"></td>
    
    </tr>
</table>
    
</form>
</body>
</html>