<?php

    include 'conexion.php';


    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo='$correo'
    	and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
       header("location: ../inicio.php");
    	exit;
    }else{
    	echo '
    	<script>
              alert("Usuario no existe, Verifica tus datos");
              window.location = "../index.html";
    	</script>
    	';
    	exit;
    }


?>