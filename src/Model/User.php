<?php

function storeUser(){
    global $bdd;
    $req = $bdd->prepare('INSERT INTO users (username,password) VALUES (:username, :password)');
    $req->execute([
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);
}

function getUser($username){
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
    $req->execute([
        'username' => $_POST['username'],
    ]);
    return $req->fetch();
}