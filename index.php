<?php

//header('Content-Type: application/json');
// echo "prueba en php";
// echo "<br>";
$metodo = $_SERVER['REQUEST_METHOD'];
//credenciales base de datos
$hostname="monorail.proxy.rlwy.net";
$username="root";
$password="sEFUPCQWvNqJoJMzpZZrFzyEasnuvNrj";
$database="railway";
$port="22011";

// Conectar a la base de datos
$conexion= new mysqli($hostname, $username, $password, $database, $port);

// Verificar la conexión
// if ($conexion->connect_errno) {
//     echo "Falló la conexión a MySQL: ";
// } else {
//     echo "Conexión exitosa";
// }

$query = "select * from usuarios";

$result = mysqli_query($conexion,$query);

$users = array();
while($data = mysqli_fetch_assoc($result)){
    //agregar elementos al arreglo
    $users[]= $data;
}

$jsonData = json_encode($users,JSON_UNESCAPED_UNICODE);
//consultar todos los usuarios
//consultar un usuario especifico
// $param = $_GET['hola'];
// echo $param. "<br>";

// echo "<pre>";
// print_r($jsonData);
// echo "</pre>";

echo $jsonData;


//arreglo asociativo 
// $cliente1 = array( "nombre" => "pepito", "edad"=> 21);
// $cliente2 = array( "nombre" => "felipe", "edad"=> 28);
// //agregar elementos a un arreglo asociativo
// $miArray=array();
// $miArray["clientes"][] = $cliente1;
// $miArray["clientes"][] = $cliente2;
// echo "<pre>";
// print_r($miArray);
// echo "</pre>";
?>
