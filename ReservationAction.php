<?php

/* Copyright (C) 2024 emil - All Rights Reserved
 * You may use, distribute and modify this code under the
 * terms of the GPL license,
 */

class ReservationAction {

    private $dbconn;

    function __construct() {
        $this->dbconn = new DBConnect();
        $this->dbconn->open_db();
    }

    function isAvailable($from_date) {
        $sql = "SELECT * FROM reservation  WHERE check_in='" . $from_date . "' AND check_out >'" . $from_date . "'";
        if (mysqli_num_rows($this->dbconn->query($sql)) > 0) {
            return false;
        }
        return true;
    }

    function __destruct() {
        $this->dbconn->close_db();
    }
}
?>

