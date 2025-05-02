<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$emailValido = "ian@gmail.com";
$passwordValido = "1234";
if ($email === $emailValido && $password === $passwordValido) {
    include("pagina-principal.php"); 
} else {
    echo "<script>alert('Correo o contraseña incorrectos');</script>";
    echo "<script>window.location.href='inicio.html';</script>";
}
?>
</body>
</html>