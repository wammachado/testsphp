<?php
// php funcionario.php 
class Funcionario {
   private $id;
   private $nome;
   private $salario;

   public function __construct($id, $nome, $salario) {
       $this->id = $id;
       $this->nome = $nome;
       $this->salario = $salario;
   }

   public function calcularSalarioAnual() {
       $salarioAnual = $this->salario * 12;
       return $salarioAnual;
   }

   
   public function getId() {
       return $this->id;
   }

   public function setId($id) {
       $this->id = $id;
   }

   public function getNome() {
       return $this->nome;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function getSalario() {
       return $this->salario;
   }

   public function setSalario($salario) {
       $this->salario = $salario;
   }
}


$funcionario = new Funcionario(1, "Wender", 2500.00);

echo "Funcionário: " . $funcionario->getNome() .PHP_EOL;
echo "Salário mensal: R$ " . $funcionario->getSalario() .PHP_EOL;
echo "Salário anual: " .": R$ " . $funcionario->calcularSalarioAnual().PHP_EOL;
