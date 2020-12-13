<?php
include("conn.php");
$conn = conn_db();
//check_login


$err = "?";

if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)&&filter_input(INPUT_POST,'email')!=""){
    $email = $_POST['email'];
}else{
    
    $err .="email=".$_POST['email'];
}

if(filter_has_var(INPUT_POST,'pass')&&filter_input(INPUT_POST,'pass')!=""){
    $pass = $_POST['pass'];
}else{
    if($err!="?"){
        $err.="&pass=err";
    }else{
        $err.="pass=err";
    }
}

if($err==="?"){
  
    $val = check_user_pass($email,$pass);

    if($val==="OK"){
        header("Location: ../index.php");
    }else if($val==="EMAIL"){
       
        header("Location: /contact.php".$err);
    }else{
        $err .="email=".$_POST['email'];
        $err.="&pass=err";
        header("Location: /contact.php".$err);
    }
}else{
    header("Location: /contact.php".$err);
}

function check_user_pass($user,$pass){
    global $conn;
    $query = "SELECT idusuario,nombre,correo,contraseña,tipo FROM usuario WHERE correo = ?";
    $dec_query = $conn->prepare($query);
    $dec_query->bind_param("s",$user);
    $dec_query->execute();
    $dec_query->store_result();
    if($dec_query->num_rows===0){
        return "NO";
    }
    $dec_query->bind_result($idCliente,$nombreCliente,$correoElectronico,$contrasena,$rol);
    $dec_query->fetch();
    $dec_query->close();

    if($contrasena===$pass){
        session_start();
        $_SESSION['user'] = $idCliente;
        $_SESSION['rol'] =$rol;
        $_SESSION['email'] = $correoElectronico;
        $_SESSION['nombre'] =$nombreCliente;
        return "OK";
    }else{
        return "NO";
    }

}