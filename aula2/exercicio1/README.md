Agora que você já aprendeu os tipos de variáveis no PHP:


Em PHP, as variáveis não têm um tipo de dado intrínseco fixo. Em vez disso, o tipo de uma variável é determinado pelos valores que ela contém. No entanto, o PHP suporta um conjunto de tipos de dados primários que podem ser agrupados em três categorias: 

1. **Tipos Escalares (ou simples)**:
    - **int** (inteiro): Um número inteiro. Exemplo: `42`
    - **float** (número de ponto flutuante): Um número que inclui um ponto decimal. Exemplos: `42.42`
    - **bool** (booleano): Representa apenas dois estados possíveis, `TRUE` ou `FALSE`.
    - **string**: Uma sequência de caracteres. Exemplo: `"Olá, Mundo!"`

2. **Tipos Compostos**:
    - **array**: Uma coleção ordenada de valores, que podem ser de qualquer tipo. Exemplo: 
      ```php
      $frutas = array("maçã", "banana", "cereja");
      ```
    - **object**: Instância de uma classe. Você pode criar objetos usando o operador `new` seguido pelo nome da classe:
      ```php
      $carro = new Car();
      ```

3. **Tipos Especiais**:
    - **resource**: É uma variável especial que mantém uma referência a um recurso externo, como um arquivo ou uma conexão de banco de dados.
    - **NULL**: É um tipo especial que representa apenas um valor: `NULL`. Uma variável do tipo `NULL` é uma variável sem valor.

Para determinar o tipo de uma variável em PHP, você pode usar a função `gettype()`:
```php
$variavel = "Olá, Mundo!";
echo gettype($variavel);  // Isso imprimirá "string"
```

Além disso, o PHP fornece uma série de funções "is_type", como `is_int()`, `is_float()`, `is_bool()`, `is_string()`, `is_array()`, `is_object()`, e `is_resource()` que você pode usar para verificar se uma variável é de um tipo específico.

É importante notar que, apesar de sua tipagem dinâmica, o PHP 7 e versões posteriores introduziram declarações de tipo para funções, permitindo especificar tipos de parâmetros e de retorno. Isso fornece uma forma de aplicar tipagem mais estrita em certos contextos.


Também aprendeu os dados de entrada e saida:

Em PHP, para aplicações de console, você pode usar as seguintes funções para ler do teclado e exibir na tela:

Para o pseudocódigo `Ler()`, em PHP você pode usar:
```php
$entrada = fgets(STDIN);
```

Para o pseudocódigo `Mostrar()`, em PHP você pode usar:
```php
echo "Aqui a sua mensagem";
```

Aqui está um exemplo simples de como você pode usar isso em uma aplicação de console PHP:

```php
<?php

echo "Digite algo: ";
$entrada = fgets(STDIN);

echo "Você digitou: " . $entrada;

?>
```

Para executar o script no console, você pode usar:
```
php nome_do_script.php
```

Já aprendeu que o mesmo é tipagem fraca:

PHP é considerada uma linguagem fracamente tipada. Isso significa que você não precisa declarar explicitamente o tipo de uma variável quando a cria. Além disso, PHP permite que você altere o tipo de uma variável durante a execução do programa e faça operações que em linguagens fortemente tipadas seriam consideradas erros de tipo.

Por exemplo, em PHP, você pode fazer o seguinte:

```php
$variavel = "123";     // $variavel é uma string
$variavel += 1;        // Agora, $variavel é um inteiro com valor 124
```

Esse tipo de operação seria inválido em uma linguagem fortemente tipada. No entanto, é válido em PHP devido à sua tipagem fraca.

No entanto, é importante mencionar que versões mais recentes do PHP introduziram recursos que permitem uma tipagem mais estrita, especialmente quando se trata de declaração de tipos em funções e métodos. Por exemplo, com PHP 7 e posteriores, você pode especificar tipos de parâmetros e tipos de retorno em funções:

```php
function adicionar(int $a, int $b): int {
    return $a + $b;
}
```

Neste exemplo, a função `adicionar` espera dois inteiros como argumentos e também retorna um inteiro. Se você tentar passar argumentos de um tipo diferente ou retornar um valor de um tipo diferente, o PHP gerará um erro.

Então, enquanto o PHP é historicamente uma linguagem fracamente tipada, ele evoluiu para oferecer opções mais fortes de tipagem onde necessário.

Faça um programa,que irá utilizar, dados de entrada e saida + variáveis para calcular alguma operação metemática, exemplo:

o usuario digita o seu nome.
digita o nome de um produto depois o valor dele
depois a quantidade de itens 
depois faça o calculo total do pedido e mostre na tela
