<?php

function home(){
    //recup les articles
    //require VIew home.php

    require MODEL . 'Article.php';
    $articles = getLastArticles();
    require VIEW . 'Home.php';
}

?>