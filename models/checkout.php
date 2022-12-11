<?php    
    function displayError($err) {
        if ($err != '') {
            return "<div style='color:red'>* $err</div>";   
        }
        else return '';
    }
    
    function firstnameErr($name) {
        $nameVal = $_POST[$name];

        if (empty($nameVal)) {
            return "Vui lòng nhập tên";
        } 
        elseif (strlen($nameVal) < 2 || strlen($nameVal) > 30) {
            return "Tên có độ dài từ 2 đến 30 kí tự";
        }
        else return '';
    }

    function lastnameErr($name) {
        $nameVal = $_POST[$name];

        if (empty($nameVal)) {
            return "Vui lòng nhập họ";
        } 
        elseif (strlen($nameVal) < 2 || strlen($nameVal) > 30) {
            return "Họ có độ dài từ 2 đến 30 kí tự";
        }
        else return '';
    }

    function phoneErr($phone) {
        $phoneVal = $_POST[$phone];

        if (empty($phoneVal)) {
            return "Vui lòng nhập số điện thoại";
        } 
        elseif (strlen($phoneVal) != 10) {
            return "Số điện thoại có độ dài 10 kí tự";
        }
        else return '';
    }

    function emailErr($email) {
        $emailVal = $_POST[$email];

        if (empty($emailVal)) {
            return "Vui lòng nhập email";
        } 
        elseif (!filter_var($emailVal, FILTER_VALIDATE_EMAIL)) {
            return "Vui lòng nhập đúng định dạng email";
        }
        else return '';
    }

    function addressErr($addr) {
        if (empty($_POST[$addr])) {
            return "Vui lòng nhập địa chỉ giao hàng";
        } else {
            return '';
        }
    }
?>  