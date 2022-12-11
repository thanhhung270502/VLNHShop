<?php
    function current_user() {
        if (isset($_COOKIE["user_id"])) {
            return true;
        }
        else {
            return false;
        }
    }
?>