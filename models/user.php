<?php
require_once 'connection_user.php';

function CheckUsernameExist($username) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE username=\'%s\'', $username);
    if ($connObj->conn->query($sql)->fetch_assoc() == null) {
        return False;
    }
    else return True;
}

function CheckAccountExists($username, $password, &$user_data) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE username=\'%s\' AND password=\'%s\'', $username, $password);
    $user = $connObj->conn->query($sql)->fetch_assoc();
    if ($user == null) {
        return false;
    } else {
        $user_data = $user;
        return true;
    }
}

function InsertUser($user) {
    $connObj = new Connection();
    $sql = sprintf('INSERT INTO user (username, password, name, phone, address) VALUE
                   (\'%s\', \'%s\', \'%s\', \'%s\', \'%s\')', $user['username'], $user['password'], $user['name'],
                   $user['phone'], $user['address']);
    $connObj->conn->query($sql);
}

function SelectAllUsers() {
    $connObj = new Connection();
    $sql = 'SELECT * FROM user';
    return $connObj->conn->query($sql);
}

function SelectUser($id) {
    $connObj = new Connection();
    $sql = sprintf('SELECT * FROM user WHERE id=\'%d\'', $id);
    return $connObj->conn->query($sql)->fetch_assoc();
}

function UpdateUser($user, $id) {
    $connObj = new Connection();
    $edit_username = sprintf('UPDATE user SET username=\'%s\' WHERE id=\'%d\'', $user['username'], $id);
    $edit_password = sprintf('UPDATE user SET password=\'%s\' WHERE id=\'%d\'', $user['password'], $id);
    $edit_name = sprintf('UPDATE user SET name=\'%s\' WHERE id=\'%d\'', $user['username'], $id);
    $edit_phone = sprintf('UPDATE user SET phone=\'%s\' WHERE id=\'%d\'', $user['phone'], $id);
    $edit_address = sprintf('UPDATE user SET address=\'%s\' WHERE id=\'%d\'', $user['address'], $id);
    $sql_arr = [$edit_username, $edit_password, $edit_name, $edit_phone, $edit_address];
    foreach ($sql_arr as $sql) {
        $connObj->conn->query($sql);
    }
}

function DropUser($id) {
    $connObj = new Connection();
    $sql = sprintf('DELETE FROM user WHERE id=\'%d\'', $id);
    $connObj->conn->query($sql);
}

function RoleUser($id) {
    $connObj = new Connection();
    $sql = sprintf('SELECT role FROM user WHERE id=\'%d\'', $id);
    $result = $connObj->conn->query($sql)->fetch_assoc()['role'];
    return $result == null ? -1 : $result;
}

function CreateNewUser($user) {
    $connObj = new Connection();
    $sql = sprintf('INSERT INTO user (username, password, name, phone, address) VALUE
                   (\'%s\', \'%s\', \'%s\', \'%s\', \'%s\')', $user['username'], $user['password'], $user['name'],
        $user['phone'], $user['address']);
    $connObj->conn->query($sql);
}

function SelectName($id) {
    $connObj = new Connection();
    $sql = sprintf('SELECT name FROM user WHERE id=\'%d\'', $id);
    return $connObj->conn->query($sql)->fetch_assoc()['name'];
}