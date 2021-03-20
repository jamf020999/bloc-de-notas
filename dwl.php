<?php
$archivo=basename($_GET['file']);
$carpeta_archivo =basename($_GET['folder']);

if (!empty($archivo)) {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$archivo");
    header("Content-Type: text/plain");
    readfile($carpeta_archivo."/".$archivo);
} else {
    echo("FATAL ERROR: NO EXISTE EL ARCHIVO");
}




exit;

?>