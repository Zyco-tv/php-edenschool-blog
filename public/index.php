<?php
session_start();
// CHEMAIN
    define('SRC', __DIR__ . '/../src/');
    define('CONTROLLER', __DIR__ . '/../src/Controller/');
    define('MODEL', __DIR__ . '/../src/Model/');
    define('VIEW', __DIR__ . '/../src/View/');

// ACCES BDD

    define('USER', 'root');
    define('DATABASE', 'blog');
    define('PASSWORD', 'root');
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=' . DATABASE . ';charset=utf8', USER, PASSWORD);

// require du router

    require_once SRC.'Router.php';
    run();