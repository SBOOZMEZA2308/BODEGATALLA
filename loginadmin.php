<?php
    session_start();

    //Simulación de verificación de credenciales (en un caso eral, usuarías una base de datos)
    $usuarios = [
        'admin@example.com' => 'adminpass',
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (isset($usuarios[$email]) && $usuarios[$email] === $password){
            $_SESSION['user'] = $email;
            header('location: Panel_admin.php');
            exit();
        } else{
            echo "<script>alert('Correo o contraseña incorrectos.'); window.location.href = 'index.html';</script>";
        }
    }
?>