Professor: Danilo
Aluno: Walter Paulo
Data: 27/09/2023


1. **Conversor de Temperatura**: 
    - Peça ao usuário para inserir uma temperatura em Celsius.
    - Converta essa temperatura para Fahrenheit.
    - Exiba a temperatura original em Celsius e a convertida em Fahrenheit.

    **Fórmula de conversão**: \( F = C \times \frac{9}{5} + 32 \)
    ```
    <?php
        echo "================[ Sistema de Temperatura ]=======================\n";

        echo "Digite a temperatura em Celsius: ";
        $temperatura_celsius = trim(fgets(STDIN));
        $temperatura_fahrenheit = $temperatura_celsius  * 1.8 + 32;

        echo "------------------------------------\n";
        echo "RESULTADO";
        echo "\n------------------------------------\n";
        echo "Temperatura: " .$temperatura_celsius . "ºC\n";
        echo "Convertida: " . $temperatura_fahrenheit . "ºF";
        echo "\n------------------------------------";
        ?>
    ```

2. **Calculadora de Área de Triângulo**:
    - Peça ao usuário para inserir a base e a altura de um triângulo.
    - Calcule a área do triângulo.
    - Exiba a base, altura e a área do triângulo.

    **Fórmula da área**: \( \text{Área} = \frac{\text{base} \times \text{altura}}{2} \)
    ```
    <?php
        echo "================[ Área de Triângulo ]=======================\n";

        echo "Digite a base: ";
        $base = trim(fgets(STDIN));

        echo "Digite a altura: ";
        $altura = trim(fgets(STDIN));

        $area = ($base * $altura) / 2;

        echo "------------------------------------\n";
        echo "RESULTADO";
        echo "\n------------------------------------\n";
        echo "Base: " .$base ."\n";
        echo "Altura: " . $altura ."\n";
        echo "Área: " . $area;
        echo "\n------------------------------------";

        ?>
    ```

3. **Conversor de Distância**:
    - Peça ao usuário para inserir uma distância em quilômetros.
    - Converta essa distância para milhas.
    - Exiba a distância original em quilômetros e a convertida em milhas.

    **Fórmula de conversão**: \( 1 \text{ quilômetro} = 0,621371 \text{ milhas} \)

    ```
    <?php
        echo "================[ Conversor de Distância ]=======================\n";

        echo "Digite a distância em quilômetros: ";
        $distancia_km = trim(fgets(STDIN));

        $distancia_milha = $distancia_km * 0.621371;

        echo "------------------------------------\n";
        echo "RESULTADO";
        echo "\n------------------------------------\n";
        echo "Distância em quilômetros: " .$distancia_km ."km\n";
        echo "Distância em milha: " .$distancia_milha ."\n";
        echo "\n------------------------------------";

        ?>

    ```