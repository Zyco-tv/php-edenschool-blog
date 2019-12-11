<?php
    function articleIndex() {
        require MODEL . 'Article.php';
        $articles=getArticles();
        require VIEW . "Articles/index.php";
    }
    function articleShow($slug) {
        require MODEL . 'Article.php';
        $article = getArticle($slug);
        require VIEW . 'Articles/show.php';
    }
    function articleUpdate($slug) {
        if (isset($_POST['title']) && isset($_POST['contenue'])) {
            $_SESSION['title'] = $_POST['title'];
            $_SESSION['contenue'] = $_POST['contenue'];
            if (empty($_POST['title'])) {
                $_SESSION['error']['titleErr'] = "le title est requis";
            }
            if (empty($_POST['contenue'])) {
                $_SESSION['error']['contenuErr'] = "le contenu est requis";
            }
            if (!isset($_SESSION['error'])) {
                require MODEL.'Article.php';
                updateArticle($slug);
                header('Location: /articles/' . $_POST['slug']);
                exit();
            } else {
                header('Location: /articles/' . $slug . '/edit');
                 
            }
        }

        
    }
    function articleEdit($slug) {
        require MODEL.'Article.php';
        $article = getArticle($slug);
        require VIEW.'Articles/edit.php';
    }
    function articleDelete($slug) {
        require MODEL.'Article.php';
        deleteArticle($slug);
        header('Location: /articles');
    }
    function articleCreate() {
        require VIEW . "Articles/create.php";
    }
    function articleStore() {
        //apeler le model
        require MODEL.'Article.php';
        storeArticle();
        header('Location: /articles');
        //fonction model
        //redirection
    }