<?php
require_once 'connection.php';

function CheckUsernameExist($username) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE username=\'%s\'', $username);
    if ($connObj->conn->query($sql)->fetch_assoc() == null) {
        return False;
    }
    else return True;
}

function CheckAccountExists($username, $password) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE username=\'%s\' AND password=\'%s\'', $username, $password);
    if ($connObj->conn->query($sql)->fetch_assoc() == null) {
        return False;
    }
    else return True;
}

function InsertUser($user) {
    $connObj = new Connection();
    $sql = sprintf('INSERT INTO user (username, password, name, phone, address, role) VALUE
                   (\'%s\', \'%s\', \'%s\', \'%s\', \'%s\', 0)', $user['username'], $user['password'], $user['name'],
                   $user['phone'], $user['address']);
    $connObj->conn->query($sql);
}

