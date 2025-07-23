<?php

// Classe Task (Tarefa)
class Task {
    public $title;
    public $description;
    public $completed;
    
    // Criar uma nova tarefa
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }
    
    // Marcar como concluída
    public function markAsCompleted() {
        $this->completed = true;
    }
    
    // Marcar como não concluída
    public function markAsIncomplete() {
        $this->completed = false;
    }
    
    // Pegar o título
    public function getTitle() {
        return $this->title;
    }
    
    // Pegar a descrição
    public function getDescription() {
        return $this->description;
    }
    
    // Ver se está concluída
    public function isCompleted() {
        return $this->completed;
    }
}

// Testando a classe
$tarefa = new Task("Estudar PHP", "Aprender orientação a objetos");

echo "Tarefa: " . $tarefa->getTitle() . "\n";
echo "Descrição: " . $tarefa->getDescription() . "\n";
echo "Concluída: " . ($tarefa->isCompleted() ? "Sim" : "Não") . "\n\n";

$tarefa->markAsCompleted();
echo "Depois de marcar como concluída: " . ($tarefa->isCompleted() ? "Sim" : "Não") . "\n";

?>