<?php
$userTable = "CREATE TABLE IF NOT EXISTS users(
        id  int auto_increment not null, 
        nom varchar(255) not null,
        email varchar(255) not null,
        isadmin boolean default false,
        password varchar(500),
        primary key(`id`)
    )
";

$userFaker = "INSERT INTO users(nom, email, isadmin, password) VALUES(?, ?, ?, ?)";
$emailFak = "root@gmail.com";
$nomFak = "roots";
$pwdFak = password_hash("root", PASSWORD_DEFAULT);




