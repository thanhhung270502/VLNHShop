<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/VLNHShop/models/user.php';

function RegisterSubmit($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (strlen($user['username']) > 255) {
        $error['username'] = 'Tên đăng nhập dưới 256 ký tự';
    } else if (CheckUsername($user['username'])) {
        $error['username'] = 'Tên đăng nhập đã tồn tại';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else if (strlen($user['password']) < 8 or strlen($user['password']) > 255) {
        $error['password'] = 'Mật khẩu trong khoảng 8 - 255 ký tự';
    } else if ($user['password'] != $user['confirm']) {
        $error['confirm'] = 'Xác nhận mật khẩu không khớp';
    } else if (empty($user['name'])) {
        $error['name'] = 'Tên không được để trống';
    } else if (!empty($user['phone'])) {
        if (!preg_match('/^[0-9]{11}$/', $user['phone'])) {
            $error['phone'] = 'Số điện thoại không hợp lệ';
        }
    } else {
        $i = 0;
    }
}

function LoginSubmit($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else if (!CheckAccountExists($user['username'], $user['password'])) {
        $error['not_exist'] = 'Tên tài khoản hoặc mật khẩu không đúng';
    }
}
