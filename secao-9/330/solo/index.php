<?php

/* 
O ficheiro dados.csv contém um conjunto de 40 linhas com informações sobre veículos.
Deves construir uma classe abstrata Veículos que contém 3 propriedades protegidas:
tipo, marca e ano.
Essa classe deve ter um construtor que recebe cada uma das linhas do ficheiro CSV.
Deve ter também um método get_tipo() para devolver o valor de $tipo que é protegido.

Cria 3 classes derivadas de Veículos: automóvel, avião e barco.

Cada uma das classes deve ter um método apresentar().
Esse método devolve uma string com o seguinte formato:
    "Este objeto guarda os dados de um automóvel da marca [marca], do ano [ano]"
    "Este objeto guarda os dados de um avião da marca [marca], do ano [ano]"
    "Este objeto guarda os dados de um barco da marca [marca], do ano [ano]"

Cria um array vazio Veículos. Ele vai guardar uma coleção de diferentes
objetos (automóvel, avião e barco).
Cada uma das linhas do ficheiro CSV deverá ser carregada, analisada e,
consoante o tipo, adicionada ao array Veículos como um novo objeto do tipo
correto.

No final, apresenta as frases criadas pelo método apresentar, de cada um
dos objetos da coleção veículos.
Tudo isto dentro de um layout de HTML com um h1 para cada tipo de veiculo
e uma lista não ordenada para cada frase.
*/

abstract class Veiculos {
    protected $tipo;
    protected $marca;
    protected $ano;
    
    public function __construct($dados) {
        $this->tipo = $dados[0];
        $this->marca = $dados[1];
        $this->ano = $dados[2];
    }
    
    public function get_tipo() {
        return $this->tipo;
    }
}

class Automovel extends veiculos {
    public function apresentar() {
        return "Este objeto guarda os dados de um automóvel da marca {$this->marca}, do ano {$this->ano}";
    }
}

class Aviao extends Veiculos {
    public function apresentar() {
        return "Este objeto guarda os dados de um avião da marca {$this->marca}, do ano {$this->ano}";
    }
}

class Barco extends Veiculos {
    public function apresentar() {
        return "Este objeto guarda os dados de um barco da marca {$this->marca}, do ano {$this->ano}";
    }
}

$veiculos = [];

$file = fopen('dados.csv', 'r');
while(!feof($file)) {
    $linha = fgetcsv($file);
    if ($linha) {
        switch ($linha[0]) {
            case 'automovel':
                $veiculos[] = new Automovel($linha);
                break;
            case 'aviao':
                $veiculos[] = new Aviao($linha);
                break;
            case 'barco':
                $veiculos[] = new Barco($linha);
                break;
            
            default:
                break;
        }
    }
}
fclose($file);

foreach ($veiculos as $veiculo) {
    if ($veiculo->get_tipo() == 'automovel') {
        echo "<h1>Automovel</h1>";
        echo $veiculo->apresentar();
        echo "<br>";
    }

    if ($veiculo->get_tipo() == 'aviao') {
        echo "<h1>Aviao</h1>";
        echo $veiculo->apresentar();
        echo "<br>";
    }

    if ($veiculo->get_tipo() == 'barco') {
        echo "<h1>Barco</h1>";
        echo $veiculo->apresentar();
        echo "<br>";
    }
}
