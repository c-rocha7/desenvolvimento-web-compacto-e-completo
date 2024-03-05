<?php

class class_numero {
	private $numero;
	
	public function __construct($numero) {
		$this->numero = $numero;
	}
	
	public function get_numero() {
		return $this->numero;
	}
	
	public function par_ou_impar() {
		if ($this->numero % 2 == 0) {
			return 'par';
		} else {
			return 'impar';
		}
	}
	
	public function tabuada() {
		$tabuada = [];
		for ($i = 1; $i <= 10; $i++) {
			$tabuada[] = $i * $this->numero;
		}
		return $tabuada;
	}

	public function raiz_quadrada() {
		return sqrt($this->numero);
	}
}
