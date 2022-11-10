<?php


class SELE{
    
    public function selin($pass,$reg) {
        require("database_connection.php");
        $select = $con->query("SELECT * FROM student_registration WHERE password ='$pass' AND reg_no ='$reg'");
        return $select;
    }

    
    public function seltin($date,$reg,$course) {
        require("database_connection.php");
        $selectable = $con->query("SELECT * FROM student_sign_in WHERE  date='$date' AND reg_no ='$reg' AND course='$course' ");
        return $selectable;
    }


    public function seldate() {
        require("database_connection.php");
        $sel_date = $con->query("SELECT * FROM student_sign_in GROUP BY date");
        return $sel_date;
    }
    
    public function seld($dep,$date) {
        require("database_connection.php");
        $sel_dep = $con->query("SELECT * FROM student_sign_in WHERE depart = '$dep' AND date = '$date' GROUP BY course ");
        return $sel_dep;
    }

    
    public function seldall($dep) {
        require("database_connection.php");
        $sel_depal = $con->query("SELECT * FROM student_sign_in WHERE depart = '$dep' GROUP BY course ");
        return $sel_depal;
    }

    
    public function seln($course,$date) {
        require("database_connection.php");
        $sel_nam = $con->query("SELECT * FROM student_sign_in WHERE course = '$course' AND date = '$date'  ");
        return $sel_nam;
    }

    
    public function selan($course) {
        require("database_connection.php");
        $sel_nama = $con->query("SELECT * FROM student_sign_in WHERE course = '$course' ");
        return $sel_nama;
    }


    public function num_att($course,$date) {
        require("database_connection.php");
        $sel_c = $con->query("SELECT * FROM student_sign_in WHERE course = '$course' AND date = '$date' ");
        return $sel_c->num_rows;
    }

    
    public function num_att_al($course) {
        require("database_connection.php");
        $sel_ca = $con->query("SELECT * FROM student_sign_in WHERE course = '$course'   ");
        return $sel_ca->num_rows;
    }

}


?>