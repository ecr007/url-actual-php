<?php
function dameURL(){
	$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	
	return $url;
}

/*
*********************************************************************
|                                                                   |
|$_SERVER['HTTP_HOST']: Sirve para obtener el nombre del dominio.   | 
|$_SERVER['SERVER_PORT']: Sirve para obtener el puerto.             |
|$_SERVER['REQUEST_URI']: Sirve para obtener la URI.                |
|                                                                   |
*********************************************************************
*/

echo dameURL();
?>
