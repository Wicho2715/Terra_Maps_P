<?php
/**
 * 
 */

//class  Conexion{
//	public static function Conectar(){
//		define('servidor', 'localhost');
//		define('nombre_bd', 'db_customer_assistant');
//		define('usuario', 'root');
//		define('password', '');

	
		
//		$opciones = array(PDO::MYSQL_ATTR_COMMAND => "SET NAMES utf-8");
//		try{
//			$conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
//			return $conexion;
//		}catch(Exception $e){
//			die("El error de conexion es:". $e->getMESSAGE());
//		}
//	}
//}


$conexion = mysqli_connect("localhost","root","","db_customer_assistant");
    if (!$conexion){
		echo 'Error al conectar la bd';
	}
	else{
		echo 'Conectado ';
	}