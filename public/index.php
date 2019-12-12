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

// fct helper
function getError($field) {
    if(isset($_SESSION['errors'][$field])) {
        $error = $_SESSION['errors'][$field];
        unset($_SESSION['errors'][$field]);
        return $error;
    }
  }

  function getold($field) {
    if(isset($_SESSION['old'][$field])) {
        $error = $_SESSION['old'][$field];
        unset($_SESSION['old'][$field]);
        return $error;
    }
  }

// require du router

    require_once SRC.'Router.php';
    run();