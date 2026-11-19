<!DOCTYPE html>
<html>
<head>
    <title>Control de Edad</title>
</head>
<body>
    <h2>Introduce tu edad</h2>
    <form method="POST" action="">
        <input type="number" name="edad" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        
        try {
            if (!is_numeric($edad) || $edad < 0) {
                throw new Exception("Por favor, introduce una edad válida (número positivo).");
            }

            if ($edad >= 18) {
                echo "<p>Eres mayor de edad.</p>";
            } else {
                echo "<p>Eres menor de edad.</p>";
            }
        } catch (Exception $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>