<?php
    include('database.php');

    $data = $database->select('formulario', [
        'nome_completo',
        'idade',
        'sexo',
        'foto'
    ], [
        'sexo' => 'masculino'
    ]);


    foreach($data as $item) {
        echo $item['foto'];
        echo "<img src='data:image/jpeg;base64,<?= base64_encode({$item['foto']}) ?>' />";
    }
?>