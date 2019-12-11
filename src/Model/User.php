<?php

function storeUser(){
    global $bdd;
    $req = $bdd->prepare('INSERT INTO users (username,password) VALUES (:username, :password)');
    $req->execute([
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ]);
}
function getUser($username){
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
    $req->execute([
        'username' => $username
    ]);
    return $req->fetch();
}