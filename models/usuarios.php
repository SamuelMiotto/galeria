<?php
class Usuarios {

	private $name;
	private $idade;

	public function setName($n) {
		$this->name = $n;
	}
	public function getName() {
		return 'Samuel';
	}
	public function setIdade($i) {
		$this->idade = $i;
	}
	public function getIdade() {
		return 33;
	}
	
}