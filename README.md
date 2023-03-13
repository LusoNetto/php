# study-of-php
This is a php repository to study
## var_dump
- var_dump mostra o tipo, tamanho e valor de uma variável.
## print_r
- print_r mostra o conteúdo de uma variável.
### Entrada:
```
<?php
    $variavel = array();
    for($i = 0; $i<10; $i++){
        $variavel[] = $i; 
    }
    print_r($variavel);
?>
```
### Saída:
```
Array
(
    [0] => 0
    [1] => 1
    [2] => 2
    [3] => 3
    [4] => 4
    [5] => 5
    [6] => 6
    [7] => 7
    [8] => 8
    [9] => 9
)
```
## explode(" ", $texto)
- Faz o mesmo que o texto.splite(" ") do python
## http e php arrays(enviar valores por meio da url):
```
http://www.wa4e.com/code/arrays/get-01.php?x=2&y=4
```
### Isso gera:
```
Using print_r:

    Array
    {
        [x] => 2
        [y] => 4
    }

Using var_dump:

    array(2) {
        ['x']=>
        string(1) "2"
        ['y']=>
        string(1) "4"
    }
```
- O php recebe os valores no padrão ?x=1&y=2&z=3...
- Esses valores estão em um vetor chamado $_GET
## Functions:
### Existem 2 formas de mandar parâmetros para uma função:
- Mandando como alias:
```
    function double($variavel) {
        $variavel = $variavel * 2;
        return $variavel
    }
```
### Deste modo a variavel não é modificada, a função cria uma cópia da variável que foi passada e trabalha com ela no escopo da função.
- Mandando como referencia
```
    function double(&$variavel) {
        $variavel = $variavel * 2;
    }
```
### Deste modo a variavel é modificada, a função recebe a referência do endereço da variável que foi passada e trabalha com ela modificando-a em escopo global.
## Variáveis Globais:
### Quando eu uso global antes de uma variável eu indico que agora as mudanças feitas nela serão globais.

## POST and GET:
### POST:
- usado para criar e modificar dados
- dados enviados pelo HTTP
### GET:
- usado para ler e procurar coisas
- dados enviados pela URL