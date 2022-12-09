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
        $user_data = [];
        $user_exist = CheckAccountExists($user['username'], $user['password'], $user_data);
        if ($user_exist) {
            setcookie("user_id", $user_data['id'], time() + (86400 * 30), "/");
            if ($user_data['role'] == 0) {
                header('Location: category.php');
            } else {
                header('Location: index.php');
            }
        } else {
            $error['not_exist'] = 'Tên tài khoản hoặc mật khẩu không đúng';
        }
    }
}

function ShowAllUsers () {
    $result = SelectAllUsers();
    while ($user = $result->fetch_assoc()) {
        $row = sprintf('<tr>
                                  <td>
                                      <div class="d-flex align-items-center">
                                          <div class="ms-3">
                                              <p class="fw-bold mb-1">%s</p>
                                              <p class="badge badge-success rounded-pill mb-0">%s</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      %s
                                  </td>
                                  <td>
                                      %s
                                  </td>
                                  <td>%s</td>
                                  <td>
                                      <button type="button" class="btn text-info btn btn-link btn-sm btn-rounded">
                                      Chỉnh sửa
                                      </button>
                                      <button type="button" class="btn text-danger btn-link btn-sm btn-rounded">
                                      Xóa
                                      </button>
                                  </td>
                            </tr>',
            $user['name'], $user['username'], $user['phone'], $user['address'], $user['role'] == 0 ? 'Admin' : 'Member');
        echo $row;
    }
}
