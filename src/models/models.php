<?php
    // Retorna as tarefas da sessão ou inicia um array vazio
    function getTasks(){
        // Digite o seu código aqui
        return $_SESSION['tasks'] ?? []
    }

    // Adiciona uma nova task no array
    function addTask($description){
        // Seu código aqui
        $tasks = getTasks();
        $tasks[] = [
            'id'=>count($tasks) + 1,
            'description'=>$description,
            'completed'=>false
        ];
        $_SESSION['tasks'] = $tasks
    }

    // Marca uma task como concluida
    function ToggleTask($id){
        // Seu código aqui
        $tasks = getTasks();
        foreach($tasks as $index => $tasks){
            if($tasks['id'] == $id){
                $tasks[$index]['completed'] = !$tasks['completed']
                break;
            }
        }
        $_SESSION['tasks'] = $tasks;
    }
?>