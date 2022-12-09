<?php
require_once __DIR__.'/../models/user.php';

function RegisterSubmit($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (strlen($user['username']) > 255) {
        $error['username'] = 'Tên đăng nhập dưới 256 ký tự';
    } else if (CheckUsernameExist($user['username'])) {
        $error['username'] = 'Tên đăng nhập đã tồn tại';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else if (strlen($user['password']) < 6 or strlen($user['password']) > 255) {
        $error['password'] = 'Mật khẩu trong khoảng 6 - 255 ký tự';
    } else if ($user['password'] != $user['confirm']) {
        $error['confirm'] = 'Xác nhận mật khẩu không khớp';
    } else if (empty($user['name'])) {
        $error['name'] = 'Tên không được để trống';
    } else if (strlen($user['name']) > 255) {
        $error['name'] = 'Họ và tên dưới 256 ký tự';
    } else if (!empty($user['phone']) and !preg_match('/^[0-9]{10}$/', $user['phone'])) {
        $error['phone'] = 'Số điện thoại không hợp lệ';
    } else if (strlen($user['address']) > 255) {
        $error['address'] = 'Địa chỉ dưới 256 ký tự';
    } else {
        //InsertUser($user);
        header('Location: login.php');
    }
}

function LoginSubmit($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else {
        $role = CheckAccountExists($user['username'], $user['password']);
        switch ($role) {
            case -1:
                $error['not_exist'] = 'Tên tài khoản hoặc mật khẩu không đúng';
                break;
            case 0:
                header('Location: category.php');
                break;
            case 1:
                header('Location: index.php');
                break;
        }

    }
}
