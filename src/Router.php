<?php
    function run() {
        if ($_SERVER['REQUEST_URI']=='/') {
            require CONTROLLER.'HomeController.php';
            home();
        } elseif(($_SERVER['REQUEST_URI'] == '/articles') && ($_SERVER['REQUEST_METHOD'] == "POST")) {
            require CONTROLLER . 'ArticleController.php';
            articleStore();
        }elseif ($_SERVER['REQUEST_URI']=='/articles' && $_SERVER['REQUEST_METHOD'] == "GET") {
            require CONTROLLER.'ArticleController.php';
            articleIndex();
        }elseif(preg_match('#^\/articles\/([a-z0-9A-Z-]+)$#',$_SERVER['REQUEST_URI'],$matches) && $_SERVER['REQUEST_METHOD'] == "POST") {
            require CONTROLLER . 'ArticleController.php';
            articleUpdate($matches[1]);
        }elseif (preg_match('#^\/articles\/([a-z0-9A-Z-]+)$#',$_SERVER['REQUEST_URI'],$matches)){
            require CONTROLLER.'ArticleController.php';
            articleShow($matches[1]);
        }elseif (preg_match('#^\/articles\/([a-z0-9A-Z-]+)\/edit$#',$_SERVER['REQUEST_URI'],$matches)){
            require CONTROLLER.'ArticleController.php';
            articleEdit($matches[1]);
        } elseif ($_SERVER['REQUEST_URI']=='/articles/nouveau/') {
            require CONTROLLER.'ArticleController.php';
            articleCreate();
        }elseif(preg_match('#^\/articles\/([a-z0-9A-Z-]+)\/delete$#',$_SERVER['REQUEST_URI'],$matches) && $_SERVER['REQUEST_METHOD'] == "POST") {
            require CONTROLLER . 'ArticleController.php';
            articleDelete($matches[1]);
        }elseif(($_SERVER['REQUEST_URI'] == '/login') && ($_SERVER['REQUEST_METHOD'] == "GET")) {
            require CONTROLLER . 'AuthController.php';
            showLogin();
        }elseif(($_SERVER['REQUEST_URI'] == '/login') && ($_SERVER['REQUEST_METHOD'] == "POST")) {
            require CONTROLLER . 'AuthController.php';
            login();
        }elseif(($_SERVER['REQUEST_URI'] == '/register') && ($_SERVER['REQUEST_METHOD'] == "GET")) {
            require CONTROLLER . 'AuthController.php';
            showRegister();
        }elseif(($_SERVER['REQUEST_URI'] == '/register') && ($_SERVER['REQUEST_METHOD'] == "POST")) {
            require CONTROLLER . 'AuthController.php';
            register();
        }
        else {
            var_dump('mauvaise route ;)');
        }
    }