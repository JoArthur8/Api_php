<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];
    // echo "Método de requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            
            echo "Aqui ações de método GET";
            break;
        
        case 'POST':
            echo "Aqui ações de método POST";
            break;
        
        default:
            echo "Método não encontrado";
            break;
    }

    // $usuarios = [
    //     ["id" => 1, "nome" =>"Maria Souza", "email" => "maria@email.com"],
    //     ["id" => 2, "nome" =>"João Silva", "email" => "joao@email.com"]
    // ];

    // echo json_encode($usuarios);
?>