<?php

include ('../app/config.php');

/* Creamos las variables y recibimos del html mediante el metodo POST */
$email= $_POST['email'];
$password= $_POST['password'];

/* Hacemos una busqueda en la base de datos */
$sql="SELECT * FROM usuarios where email = '$email';";
/* Accedemos al pdo y preparamos la consulta sql */
$query=$pdo->prepare($sql);
/* Ejecutamos la consulta */
$query->execute();

/* Hacemos una busqueda que nos traiga todos los usuarios con el correo */
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);
$contador = 0;
foreach ($usuarios as $usuario){
   echo $password_tabla = $usuario['password'];
   echo $contador = $contador + 1 ;
}
/* Aqui verifica con otra contraseña con hash */
/* if(($contador > 0)  && (password_verify($password,$password_tabla))) */
if(($contador > 0)  && ($password == $password_tabla)){
    echo "Los datos son correctos";
    header('Location:'.APP_URL."/admin");
}else{
    echo "Los datos no son correctos";
    header('Location:'.APP_URL."/login");
    /* $2y$10$0tYmdHU9uGCIxY1f90W1EuIm$4NO8axwkxL1WzLbqO2LdNa6m312 */
}

?>