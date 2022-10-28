<?php

       include 'conexion.php';


       $nombre_completo = $_POST['nombre_completo'];
       $correo = $_POST['correo'];
       $usuario = $_POST['usuario'];
       $clave = $_POST['clave'];

       $query = "INSERT INTO clientes(nombre_completo, correo, usuario, clave) 
                               VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";

       $ejecutar = mysqli_query($conexion, $query);

        if ($ejecutar) {
              echo '
                    <script>
                          alert("Usuario Almacenado Correctamente");
                          window.location = "../index.html";
                    </script>
              ';
        }else{
              echo '
                    <script>
                          alert("Usuario no Almacenado, Intentalo de nuevo");
                          window.location = "../index.html";
                    </script>
              ';
        }

        mysqly_close($conexion);

?>