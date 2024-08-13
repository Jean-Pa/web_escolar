<?php



define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('DB','sistema_escolar');

define('APP_NAME','SISTEMA ESCOLAR');
define('APP_URL','http://localhost/web_escolar/sistemaescolar/');
define('KEY_API_MAPS','');

$servidor="mysql:dbname=".DB.";host=".SERVIDOR;


try{
    $pdo=new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  //  echo "conexion exitosa";
}catch(PDOException $e){
    print_r($e);
    
    echo "Error no se pudo conectar a la base de datos";
}

date_default_timezone_set("America/Lima");
$fechaHora=date('y-m-d H:i:s');

$fecha_actual=date('Y-m-d');
$dia_actual=date('d');
$mes=date('m');
$anio=date('Y');

//echo $anio;
?>