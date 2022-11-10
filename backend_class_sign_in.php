<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {

    require("class/sel_class.php");
    
    $course = $_POST['course'];
    $reg = $_POST['reg'];
    $pass = $_POST['pass'];
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");


    $selp = new SELE();
        
    $sel_ven = $selp->seltin($date,$reg,$course);
    if ($sel_ven->num_rows>=1) {
        while($sov = $sel_ven->fetch_assoc()){
        $sadate = $sov['date'];
        $sareg = $sov['reg_no'];
        $saco = $sov['course'];
        }
    }

    if(empty($pass)) {
        print("<p style='text-align:center;color:red;'>FILL IN YOUR PASSWORD</p>");
    }
    elseif (empty($reg)) {
        print("<p style='text-align:center;color:red;'>FILL IN YOUR REGISTRATION NUMBER</p>");
    }
    elseif ($sel_ven->num_rows>=1 AND $date == $sadate AND $reg == $sareg AND $saco == $course) {        
        print("<p style='text-align:center;color:red;'>YOU HAVE ALREADY BEEN REGISTERED</p>");
    }else {
        
        $sel_val = $selp->selin($pass,$reg);
        if ($sel_val->num_rows>0) {
            
            $dow=$sel_val->fetch_assoc();
            if ($dow['reg_no']==$reg) {
                $sdep = $dow['depart'];
                $sfac = $dow['faculty'];
                $fname = $dow['fullname'];
            }

            require("class/class.php");
            $class_p = new ATT();
            $insat = $class_p-> sign($fname,$reg,$course,$sdep,$sfac,$date,$time);
            if ($insat) {    
                print("<p style='text-align:center;color:blue;'>NEXT CANDIDATE</p>");
            }      
            
                        
        }else {
            print("<p style='text-align:center;color:red;'>INCORRECT PASSWORD OR REGISTRATION NUMBER</p>");
        }
    }
}




?>