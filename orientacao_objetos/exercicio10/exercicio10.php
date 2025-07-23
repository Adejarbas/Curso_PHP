<?php

// Classe Passenger - representa um passageiro
class Passenger {
    // Atributos da classe
    private $name;        // nome do passageiro
    private $age;         // idade do passageiro  
    private $seatNumber;  // número do assento
    
    // Construtor - método especial que é chamado quando criamos um objeto
    public function __construct($name, $age, $seatNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }
    
    // Método getName() - retorna o nome do passageiro
    public function getName() {
        return $this->name;
    }
    
    // Método getAge() - retorna a idade do passageiro
    public function getAge() {
        return $this->age;
    }
    
    // Método getSeatNumber() - retorna o número do assento
    public function getSeatNumber() {
        return $this->seatNumber;
    }
    
    // Método setSeatNumber() - atualiza o número do assento
    public function setSeatNumber($seatNumber) {
        $this->seatNumber = $seatNumber;
    }
}

// Exemplo de uso da classe Passenger
echo "<h2>Exemplo de uso da classe Passenger</h2>";

// Criando um novo passageiro
$passageiro1 = new Passenger("João Silva", 30, "12A");

// Mostrando os dados do passageiro
echo "<p><strong>Dados do Passageiro:</strong></p>";
echo "<p>Nome: " . $passageiro1->getName() . "</p>";
echo "<p>Idade: " . $passageiro1->getAge() . " anos</p>";
echo "<p>Assento: " . $passageiro1->getSeatNumber() . "</p>";

echo "<hr>";

// Alterando o número do assento
echo "<p><strong>Alterando o assento do passageiro...</strong></p>";
$passageiro1->setSeatNumber("15B");

// Mostrando os dados atualizados
echo "<p><strong>Dados Atualizados:</strong></p>";
echo "<p>Nome: " . $passageiro1->getName() . "</p>";
echo "<p>Idade: " . $passageiro1->getAge() . " anos</p>";
echo "<p>Assento: " . $passageiro1->getSeatNumber() . "</p>";

?>