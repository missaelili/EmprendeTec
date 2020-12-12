<?php
//echo $_GET['id'];
$id = $_POST['custId'];
$inv = $_POST['inversion'];
$mysqli = new MySQLi("localhost:3306", "root", "", "tecnologico");
if (mysqli_connect_errno()) {
    printf("Falló la conexión failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT idProyectos, nombre, dinero,meta, tema, descripcion FROM proyectos WHERE idProyectos = '$id'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();

$mas = $inv + $row['dinero'];

$consulta = "UPDATE proyectos SET dinero = '$mas' WHERE idProyectos = '$id'";
$result2 = $mysqli->prepare($consulta);

$result2->execute();

header("Location: proyecto.php?id=$id");

?>