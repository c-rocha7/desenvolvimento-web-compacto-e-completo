<?php

/* 
1. Criar uma classe Humanos.

2. A classe deve ter 3 propriedades privadas onde 
   vamos guardar masculinos, femininos e desconhecidos

3. No método definir() devemos passar dois argumentos:
   sexo e nome.
   O método deverá implementar a lógica para construir
   as coleções de homens, mulheres e desconhecidos

4. Deverá implementar 3 métodos, cada um deles para
   devolver a coleção de nomes masculinos, femininos e desconhecidos

5. Neste script já existem, uma coleção de dados.
   Deverás importar a classe Humanos, instanciar num objeto $humanos.
   Iterar por todos os elementos da coleção $dados e passar a informação
   para dentro do objeto $humanos.

6. Finalmente, criar uma estrutura básica de HTML dentro do script
   e apresentar um título h1 para cada tipo de identidade e uma
   lista desordenada que vai apresentar cada um dos nomes de cada
   entidade colecionada (masculinos, femininos e desconhecidos)

   Deves separar cada uma das coleções com uma horizontal rule

   NOTA: m ou M = masculino
         f ou F = feminino
         outros... desconhecido
*/

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['F', 'Márcia Antunes'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinís'],
];

class Humanos {
   private $masculinos = [];
   private $femininos = [];
   private $desconhecidos = [];
   
   public function definir($sexo, $nome) {
      if ($sexo =='m') {
         $this->masculinos[] = $nome;
      } elseif ($sexo == 'f') {
         $this->femininos[] = $nome;
      } else {
         $this->desconhecidos[] = $nome;
      }
   }
   
   public function get_masculinos() {
      return $this->masculinos;
   }
   
   public function get_femininos() {
      return $this->femininos;
   }
   
   public function get_desconhecidos() {
      return $this->desconhecidos;
   }
}

$humanos = new Humanos();

foreach ($dados as $item) {
   $humanos->definir($item[0], $item[1]);
}

echo '<h1>Humanos</h1>';

echo '<hr>';

echo '<h3>Masculinos</h3>';

echo '<ul>';

foreach ($humanos->get_masculinos() as $item) {
   echo '<li>'.$item.'</li>';
}

echo '</ul>';

echo '<hr>';

echo '<h3>Femininos</h3>';

echo '<ul>';

foreach ($humanos->get_femininos() as $item) {
   echo '<li>'.$item.'</li>';
}

echo '</ul>';

echo '<hr>';

echo '<h3>Desconhecidos</h3>';

echo '<ul>';

foreach ($humanos->get_desconhecidos() as $item) {
   echo '<li>'.$item.'</li>';
}

echo '</ul>';
