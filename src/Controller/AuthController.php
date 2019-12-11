<?php

function showLogin() {
    require VIEW . "Auth/login.php";
}
function login() {
    //gere les erreur 
    require MODEL.'User.php';
    getUser();
    header('Location: /articles');
}
function showRegister() {
    require VIEW . "Auth/register.php";
}
function register() {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        
        if (empty($_POST['username'])) {
            $_SESSION['errors']['usernameErr'] = "le username est requis";
        }
        if (empty($_POST['password'])) {
            $_SESSION['errors']['passwordErr'] = "le password est requis";
        }
        
        if (!isset($_SESSION['error'])) {
            require MODEL.'User.php';
            $user = getUser($_POST['username']);
            if ($user) {
                $_SESSION['errors']['username'] = 'Le pseudo est déjà pris';
                header('Location: /register');
                exit();
            }
            storeUser();
            header('Location: /articles');
        } else {
            header('Location: /register');
             
        }
    }
}
