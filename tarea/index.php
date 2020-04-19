<?php

//echo json_encode($_SERVER);
$_REQUEST_method= $_SERVER['REQUEST_METHOD'];
$path_info= $_SERVER['PATH_INFO'];
$datos;

switch($path_info){
case '/mascotas':
    if($_REQUEST_method=='POST'){
        //guardo datos
    }else if($_REQUEST_method=='GET'){
        //devuelvo 
        $datos=array('Michelle', 'Titi','Pupi');
    }else{
        echo "405 method now allowed";
    }
break;
case '/personas':

    if($_REQUEST_method=='POST'){
        //guardo datos
    }else if($_REQUEST_method=='GET'){
        //devuelvo 
        $datos=array('Juan',' Mario','Pepe');
    }else{
        echo "405 method now allowed";
    }

break;
case '/auto':
    if($_REQUEST_method=='POST'){
        //guardo datos
    }else if($_REQUEST_method=='GET'){
        //devuelvo 
        $datos=array('BMW', 'FORD', '4X4');
    }else{
        echo "405 method now allowed";
    }
break;
default;
break;

}
$respuesta = new stdClass;
$respuesta->success = true;
$respuesta->data = $datos;
echo json_encode($respuesta);


?>