<?php

/* Copyright (C) 2024 emil - All Rights Reserved
 * You may use, distribute and modify this code under the
 * terms of the GPL license,
 */

class DBConnect {

    private $dbhost = 'localhost:3306';
    private $dbuser = 'root';
    private $dbpass = '';
    private $db = 'mit_uok';
    private $conn = null;

    //private $dbhost = 'localhost';
    //private $dbuser = 'cityofho_uok';
    //private $dbpass = '8k5PPbEci3xH';
    //private $db = 'cityofho_mit_uok';
    //private $conn = null;

    function open_db() {
        $mysqli = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db);

        if ($mysqli->connect_errno) {
            echo "Error : " . $mysqli->connect_error;
            exit();
        }

        $this->conn = $mysqli;
    }

    function query($sql) {
        return $this->conn->query($sql);
    }

    function close_db() {
        mysqli_close($this->conn);
    }
}
?>