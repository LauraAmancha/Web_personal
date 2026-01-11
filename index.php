<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web Personal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div>
            <h1>Mi Web Personal</h1>
            <p>Bienvenido a mi página web</p>
        </div>
        <img src="img/mi-foto.jpg" alt="Foto de Laura" class="foto-perfil">
    </header>

    <section id="sobre-mi">
        <h2>Sobre mí</h2>
        <p>Mi nombre es Laura Amancha y estoy aprendiendo a crear páginas web con HTML y CSS.</p>
        <p>Me interesa el diseño web, la tecnología y la programación.</p>
        <p>Mi objetivo es desarrollar sitios web atractivos y funcionales mientras continúo mejorando mis habilidades.</p>
        <p>Disfruto aprender cosas nuevas y siempre busco superarme en cada proyecto.</p>
    </section>

    <!-- CONTENEDOR FLEX: HABILIDADES + CALCULADORA -->
    <section id="habilidades-calculadora">
        <div id="habilidades">
            <h2>Mis habilidades</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>GitHub</li>
            </ul>
        </div>

        <div id="calculadora">
            <h2>Calculadora</h2>
            <form method="post">
                <input type="number" name="num1" placeholder="Número 1" required>
                <input type="number" name="num2" placeholder="Número 2" required>
                <select name="operacion">
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operacion = $_POST["operacion"];
                $resultado = 0;

                switch ($operacion) {
                    case "sumar": $resultado = $num1 + $num2; break;
                    case "restar": $resultado = $num1 - $num2; break;
                    case "multiplicar": $resultado = $num1 * $num2; break;
                    case "dividir":
                        if ($num2 != 0) $resultado = $num1 / $num2;
                        else { echo "<p style='color:red;'><strong>Error:</strong> No se puede dividir entre cero</p>"; return; }
                        break;
                }

                echo "<p><strong>Resultado:</strong> $resultado</p>";
            }
            ?>
        </div>
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <p>Si quieres escribirme, puedes usar el siguiente correo:</p>
        <p><a href="mailto:lauraam11@uniandes.edu.ec" class="boton-correo">lauraam11@uniandes.edu.ec</a></p>
    </section>

    <footer>
