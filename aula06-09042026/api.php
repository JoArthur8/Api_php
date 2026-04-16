<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];
    // echo "Método de requisição: " . $metodo;
    $arquivo = "usuarios.json";

    if(!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    $usuarios = json_decode(file_get_contents($arquivo),true);
    // [
    //     ["id" => 1, "nome" =>"Maria Souza", "email" => "maria@email.com"],
    //     ["id" => 2, "nome" =>"João Silva", "email" => "joao@email.com"]
    // ];



    switch ($metodo) {
        case 'GET':

            // echo "Aqui ações de método GET";
            echo json_encode($usuarios);
            break;
        
        case 'POST':
            // echo "Aqui ações de método POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            // print_r($dados);
            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];
            array_push($usuarios,$novoUsuario);
            // file_put_contents($arquivo,$usuarios);
            echo json_encode('Usuario inserido');
            print_r($usuarios);
            break;
        
        default:
            echo "Método não encontrado";
            break;
    }

    
?>