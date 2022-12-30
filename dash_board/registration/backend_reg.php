<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $fname = $_POST['last'].' '.$_POST['first'].' '.$_POST['mid'];
    $reg = $_POST['reg'];
    $level = $_POST['level'];
    $sess = $_POST['sess'];
    $scon = $_POST['stcon'];
    $dep = $_POST['dep'];
    $fac = $_POST['fac'];
    $pass = $_POST['pass'];
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");

    require("../../class/class.php");

    $class_p = new ATT();

    $insat = $class_p->reg($fname,$reg,$level,$sess,$scon,$dep,$fac,$pass,$date,$time);
    if ($insat) {
        print("<p style='color:blue;font-size:20px;'>STUDENT REGISTERED SUCCESSFULLY</p>");
    }else {
        print("<p style='color:red;font-size:20px;'>STUDENT NOT REGISTERED</p>");
    }

}

?>