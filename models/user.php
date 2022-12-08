<?php
require_once 'connection.php';

function CheckUsername($username) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE username=\'%s\'', $username);
    if ($connObj->conn->query($sql)->fetch_assoc() == null) {
        return False;
    }
    else return True;
}

function InsertUser($user) {
    $connObj = new Connection();
    $sql = sprintf('INSERT INTO user (username, password, name, phone, address, image) VALUE
                   (%s, %s, %s, %s, %s, %s)', $user['username'], $user['password'], $user['name'],
                   $user['phone'], $user['address'], $user['image']);
    $connObj->conn->query($sql);
}

