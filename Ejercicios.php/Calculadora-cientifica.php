<?php

// Clase extendida
class CalculadoraCientifica extends Calculadora {
    
    // Calcula la potencia (base elevado al exponente)
    public function potencia(float $base, float $exponente): float {
        return pow($base, $exponente); // También se puede usar: $base ** $exponente
    }

    // Calcula la raíz cuadrada
    public function raizCuadrada(float $numero): float {
        if ($numero < 0) {
            throw new Exception("Error: No se puede calcular la raíz cuadrada de un número negativo.");
        }
        return sqrt($numero);
    }

    // Opcional: Calcula la raíz n-ésima (ej. raíz cúbica si $indice = 3)
    public function raizEnesima(float $numero, float $indice): float {
        if ($indice == 0) {
            throw new Exception("Error: El índice de la raíz no puede ser cero.");
        }
        if ($numero < 0 && $indice % 2 == 0) {
            throw new Exception("Error: No existe raíz real par de un número negativo.");
        }
        // Fórmula matemática: número elevado a (1 / índice)
        return pow($numero, 1 / $indice);
    }
}

// --- EJEMPLO DE USO ---

try {
    // Instanciamos únicamente la Calculadora Científica
    $calc = new CalculadoraCientifica();

    // Uso de métodos heredados de la clase Calculadora
    echo "Suma (10 + 5): " . $calc->sumar(10, 5) . "\n";
    echo "División (20 / 4): " . $calc->dividir(20, 4) . "\n";

    // Uso de los nuevos métodos de CalculadoraCientifica
    echo "Potencia (2 elevado a 3): " . $calc->potencia(2, 3) . "\n";
    echo "Raíz cuadrada de 81: " . $calc->raizCuadrada(81) . "\n";
    echo "Raíz cúbica de 27: " . $calc->raizEnesima(27, 3) . "\n";

} catch (Exception $e) {
    echo $e->getMessage();
}
//