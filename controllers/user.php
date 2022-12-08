<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/VLNHShop/models/user.php';

function RegisterSubmit($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (CheckUsername($user['username'])) {
        $error['username'] = 'Tên đăng nhập đã tồn tại';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else if ($user['password'] != $user['confirm']) {
        $error['confirm'] = 'Xác nhận mật khẩu không khớp';
    } else if (empty($user['name'])) {
        $error['name'] = 'Tên không được để trống';
    }
}