<?php
require_once 'Calculadora.php';

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
