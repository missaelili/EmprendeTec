<?php
//echo $_GET['id'];
$mysqli = new MySQLi("localhost:3306", "root", "", "tecnologico");
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

$mail = $_POST['email'];
$pass = $_POST['contra'];

$query = "select idProyectos FROM proyectos";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();

$mas = count($row) + 1;


$consulta = "INSERT INTO usuario (idusuario, correo, contraseña) VALUES ('$mas', '$mail', '$pass')";
$result2 = $mysqli->prepare($consulta);

$result2->execute();
//header("Location: contact.php");

?>