<?php

class Contact {
    // Atributos
    public $name;
    public $email;
    public $phone;
    
    // Construtor
    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    
    // Método para obter o nome
    public function getName() {
        return $this->name;
    }
    
    // Método para obter o email
    public function getEmail() {
        return $this->email;
    }
    
    // Método para obter o telefone
    public function getPhone() {
        return $this->phone;
    }
    
    // Método para atualizar o email
    public function setEmail($email) {
        $this->email = $email;
    }
    
    // Método para atualizar o telefone
    public function setPhone($phone) {
        $this->phone = $phone;
    }
}

// Exemplo de uso
$contato1 = new Contact("João Silva", "joao@email.com", "(11) 99999-9999");

echo "Nome: " . $contato1->getName() . "<br>";
echo "Email: " . $contato1->getEmail() . "<br>";
echo "Telefone: " . $contato1->getPhone() . "<br><br>";

// Atualizando dados do contato
$contato1->setEmail("joao.silva@novoemail.com");
$contato1->setPhone("(11) 88888-8888");

echo "Dados atualizados:<br>";
echo "Nome: " . $contato1->getName() . "<br>";
echo "Email: " . $contato1->getEmail() . "<br>";
echo "Telefone: " . $contato1->getPhone() . "<br>";

?>