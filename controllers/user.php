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
        InsertUser($user);
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
            setcookie("user-id", $user_data['id'], time() + (86400 * 30), "/");
            if ($user_data['role'] == 0) {
                header('Location: admin_dashboard.php');
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
                                      <div class="d-flex">
                                          <div class="ms-3">
                                              <p class="fw-bold mb-1">%s</p>
                                              <p class="badge badge-success rounded-pill mb-0">%s</p>
                                          </div>
                                      </div>
                                  </td>
                                  <td class="text-center">
                                      %s
                                  </td>
                                  <td>
                                      %s
                                  </td>
                                  <td class="text-center">%s</td>
                                  <td>
                                      <div class="d-flex justify-content-center align-items-center">
                                          <a href="./edit_user.php?id=%d">
                                              <button type="button" class="btn bg-primary text-white btn btn-link btn-sm btn-rounded m-1">
                                              Sửa
                                              </button>
                                          </a>
                                          <button 
                                                type="button"
                                                class="btn bg-danger text-white btn-link btn-sm btn-rounded m-1"
                                                data-mdb-toggle="modal"
                                                data-mdb-target="#delete%d">
                                          Xóa
                                          </button>
                                      </div>
                                  </td>
                            </tr>
                            <div class="modal fade" id="delete%d" tabindex="-1">
                                  <div class="modal-dialog">
                                        <div class="modal-content">
                                              <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Xóa thành viên</h5>
                                                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                              Bạn có muốn xóa thành viên <span class="badge badge-success rounded-pill mb-0">%s</span> ?
                                              </div>
                                              <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary text-danger" data-mdb-dismiss="modal">Thoát</button>
                                                    <a href="./delete_user.php?id=%d">
                                                        <button type="button" class="btn btn-danger">Xác nhận</button>
                                                    </a>                                                   
                                              </div>
                                        </div>
                                  </div>
                            </div>',
            $user['name'],
            $user['username'],
            $user['phone'],
            $user['address'],
            $user['role'] == 0 ? 'Admin' : 'Member',
            $user['id'],
            $user['id'],
            $user['id'],
            $user['username'],
            $user['id']);
        echo $row;
    }
}

function GetUserData(&$user, $id) {
    $user_data = SelectUser($id);
    $user = $user_data;
}

function EditUserData($user, &$error) {
    if (empty($user['username'])) {
        $error['username'] = 'Tên đăng nhập không được bỏ trống';
    } else if (strlen($user['username']) > 255) {
        $error['username'] = 'Tên đăng nhập dưới 256 ký tự';
    } else if ($user['username'] != $user['cur-username'] and CheckUsernameExist($user['username'])) {
            $error['username'] = 'Tên đăng nhập đã tồn tại';
    } else if (empty($user['password'])) {
        $error['password'] = 'Mật khẩu không được bỏ trống';
    } else if (strlen($user['password']) < 6 or strlen($user['password']) > 255) {
        $error['password'] = 'Mật khẩu trong khoảng 6 - 255 ký tự';
    }  else if (empty($user['name'])) {
        $error['name'] = 'Tên không được để trống';
    } else if (strlen($user['name']) > 255) {
        $error['name'] = 'Họ và tên dưới 256 ký tự';
    } else if (!empty($user['phone']) and !preg_match('/^[0-9]{10}$/', $user['phone'])) {
        $error['phone'] = 'Số điện thoại không hợp lệ';
    } else if (strlen($user['address']) > 255) {
        $error['address'] = 'Địa chỉ dưới 256 ký tự';
    } else {
        UpdateUser($user, $user['id']);
        header('Location: manage_user.php');
    }
}

function DeleteUser($id) {
    DropUser($id);
}

function CheckAdminUser($id) {
    if (RoleUser($id) != 0) {
        header('Location: index.php');
    }
}

function CreateUser($user, &$error) {
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
    }  else if (empty($user['name'])) {
        $error['name'] = 'Tên không được để trống';
    } else if (strlen($user['name']) > 255) {
        $error['name'] = 'Họ và tên dưới 256 ký tự';
    } else if (!empty($user['phone']) and !preg_match('/^[0-9]{10}$/', $user['phone'])) {
        $error['phone'] = 'Số điện thoại không hợp lệ';
    } else if (strlen($user['address']) > 255) {
        $error['address'] = 'Địa chỉ dưới 256 ký tự';
    } else {
        CreateNewUser($user);
        header('Location: manage_user.php');
    }
}

function GetName($id) {
    return SelectName($id);
}