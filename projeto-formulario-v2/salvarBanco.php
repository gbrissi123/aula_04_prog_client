<?php
    include('database.php');

    $database->insert('formulario', [
        'nome_completo' => $_POST['nome_completo'],
        'idade' => $_POST['idade'],
        'foto' => $_POST['foto'],
        'sexo' => 'masculino'
    ]);

    // var_dump($_GET);
    // var_dump($_POST);
    echo json_encode([
        'sucesso' => true,
        'mensagem' => 'Agora salvei com sucesso de novo!',
        'dados_enviados' => $_POST
    ]);
?>