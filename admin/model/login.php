
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php

    session_start();

    include("../controlador/conexion.php");

    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $sql ="SELECT nombreusuario FROM usuarios WHERE nombreusuario='$user' AND password='$password'";
        $query=mysqli_query($db, $sql);

        if ($resultado=mysqli_fetch_array($query)) {
            $_SESSION["u_usuario"] = $user;
            header("location: ../index2.php");
        }
        else{
            echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Usuario o contraseña son incorrectos!'
                        })
                        setTimeout(
                            function(){
                                document.location='../index.php';
                            }, 3000
                        )
                </script>";
        }
    }else{
    echo "<script>
                alert('Uno de los campos venia sin datos ');
                document.location='../index.php';
        </script>";
}
?>


</body>
</html>