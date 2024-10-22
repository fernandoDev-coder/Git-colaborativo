<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Profesores y Alumnos</title>
    <link rel="stylesheet" href="stylesLog.css">
</head>

<body>
    <main>
        <h1>LOGIN DE PROFESORES Y ALUMNOS</h1>
        <form action="login.php" method="post">
            <div>
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña: </label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Login">
            <!-- <input type="hidden" name="form_enviado" value="enviado"> -->
        </form>
    </main>
    <?php
    session_start();

    require_once("alumnado.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == 'alumno@ies.com' && $password == 'alumno') {
            $_SESSION['user'] = new Alumnado($email, $password, 'alumno');
            header('Location: index.php');
            exit();
        } elseif ($email == 'profesor@ies.com' && $password == 'profesor') {
            $_SESSION['user'] = new Alumnado($email, $password, 'profesor');
            header('Location: index.php');
            exit();
        } else {
            echo '<p>Credenciales incorrectas. Inténtalo de nuevo.</p>';
        }
    }
    ?>
</body>

</html>