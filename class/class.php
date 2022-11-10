<?php

class ATT{
    
    public function reg($fname,$reg,$level,$sess,$scon,$dep,$fac,$pass,$date,$time) {
        require("database_connection.php");
        $insert = $con->query("INSERT INTO student_registration
        (fullname,reg_no,level,session,st_con,depart,faculty,password,date,time)VALUE('$fname','$reg','$level','$sess','$scon','$dep','$fac','$pass','$date','$time')");
        return $insert;
    }

    public function sign($fname,$reg,$course,$dep,$fac,$date,$time) {
        require("database_connection.php");
        $ins = $con->query("INSERT INTO student_sign_in
        (fullname,reg_no,course,depart,faculty,date,time)VALUE('$fname','$reg','$course','$dep','$fac','$date','$time')");
        return $ins;
    }

}



?>