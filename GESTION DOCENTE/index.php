<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Gestión de Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <?php
        require_once('alumnado.php');
        session_start();

        
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit();
        }

        $persona = $_SESSION['user'];

        $modulos = ['Java', 'Python', 'C++', 'Empresa e iniciativa emprendedora'];
        $alumnos = ['Daniel', 'Fernando', 'Ana', 'Jaime'];

        echo "<h2>Bienvenido/a, " . $persona->getEmail() . "</h2>";

        if ($persona->getRol() == 'alumno') {
            echo '<h3>Tus Módulos:</h3>';
            echo '<ul>';
            foreach ($modulos as $modulo) {
                echo "<li>" . $modulo . "</li>";
            }
            echo '</ul>';
        } elseif ($persona->getRol() == 'profesor') {
            echo '<h3>Listado de Alumnos:</h3>';
            echo '<ul>';
            foreach ($alumnos as $alumno) {
                echo "<li>" . $alumno . "</li>";
            }
            echo '</ul>';
        } else {
            echo 'ROL NO RECONOCIDO';
        }
        ?>
        <form action="login.php" method="get">
            <button type="submit">Volver al login</button>
        </form>
    </main>
</body>

</html>