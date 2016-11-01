<?php
 //Recibimos el parametro des de Android
	include './funciones.php';
    conexionlocal();
	$nombre = $_REQUEST['nombre'];
	$observacion = $_REQUEST['observacion'];
	$telefono = $_REQUEST['telefono'];
	$imagen = $_REQUEST['imagen'];

 $imagenUrl='http://10.0.100.214/diablo/web/class/reservas/'.$imagen.'.jpg';

 
 $query = "INSERT INTO reservas(res_nom,res_obs,res_fecha,res_telefono,res_activo,res_confirm,res_imagen)"
        . "VALUES ('$nombre','$observacion',now(),'$telefono','t','f','$imagenUrl');";
 //ejecucion del query
 $ejecucion = pg_query($query)or die('Error al realizar la carga');
 
	echo ("SERVER: Datos Recibidos Exitosamente..!");
	
	
	
	
 
?>