<?php

//var_dump($_GET);
copy('archivo.txt', 'archivo2.txt');
$archivo = fopen('archivo.txt', 'w+');
//unlink('archivo2.txt');

$bytes = fwrite($archivo, "Nueva linea 1");

while(!feof($archivo) ){{
    echo fgets($archivo). "<br>";
}
}
//echo fread($archivo,filesize('archivo.txt'));
$cerrar =fclose($archivo);

/**
 * Metodos HTTP
 * GET:obtener recursos
 * POST: Crear recursos
 * PUT: Modificar recursos
 * DELETE: borrar recurso
 * 
 * GET: entidad -> trae todo
 * GET: entidad id= 1 -> trae datos del elemento indicado
 * POST: entidad-> guardo datos que vienen por post
 * 
 */

?>