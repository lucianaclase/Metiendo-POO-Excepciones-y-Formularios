<!DOCTYPE html>
<html>
<head>
    <title>Impresión de Números</title>
</head>
<body>
    <h2>Introduce un número límite</h2>
    <form method="POST" action="">
        <input type="number" name="limite" required>
        <input type="submit" value="Generar Secuencia">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limite = (int)$_POST['limite'];
        
        try {
            if ($limite < 1) {
                throw new Exception("El número debe ser mayor o igual a 1.");
            }

            echo "<h3>Ascendente:</h3>";
            for ($i = 1; $i <= $limite; $i++) {
                echo $i . " ";
            }

            echo "<br><h3>Descendente:</h3>";
            for ($i = $limite; $i >= 1; $i--) {
                echo $i . " ";
            }

        } catch (Exception $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>


// Hacer públic 