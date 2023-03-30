<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    use Medoo\Medoo;
    
    // Connect the database.
    $database = new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'formulario',
        'username' => 'root',
        'password' => ''
    ]);
?>