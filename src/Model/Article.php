<?php
function getArticles(){
    global $bdd;
    $req=$bdd->query('SELECT * From articles ORDER BY created_at');
    return $req->fetchAll();
}

function getLastArticles() {
    global $bdd;
        $req=$bdd->query('SELECT * FROM articles ORDER BY created_at DESC LIMIT 3');
        return $req->fetchAll();
}


function getArticle($slug){
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM articles WHERE slug = :slug');
    $req->execute ([
        "slug" => $slug
    ]);
    return $req->fetch();
}

function storeArticle() {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO articles (title,slug,contenue, user_id) VALUES (:title, :slug, :contenue, 1)');
    $req->execute([
        'title' => $_POST['title'],
        'slug' => $_POST['slug'],
        'contenue' => $_POST['contenue']
    ]);
}

function updateArticle($slug) {
    global $bdd;
    $req = $bdd->prepare('UPDATE articles SET title = :title, slug = :slugPost, contenue = :contenue WHERE slug = :slug');
    $req->execute([
        'title' => $_POST['title'],
        'slugPost' => $_POST['slug'],
        'contenue' => $_POST['contenue'],
        'slug' => $slug
    ]);
}

function deleteArticle($slug) {
    global $bdd;
    $req = $bdd->prepare('DELETE FROM articles WHERE slug = :slug');
    $req->execute([
        "slug" => $slug
    ]);
}


