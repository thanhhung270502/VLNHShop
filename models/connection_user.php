<?php
    class Connection {
        public $conn;
        function __construct()
        {
            $this->conn = mysqli_connect('localhost', 'root', '', 'shop', 3307);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        function __destruct()
        {
            $this->conn->close();
        }
    }
