<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/school_reg.css" media="all">
    <link rel="stylesheet" href="../../css/rep_school_reg.css" media="all">
    <title>STUDENT REGISTRATION</title>
</head>
<body>

<?php require("../../nav/admin_dashboard_layout.php"); ?>


<div class="main-div-container">

<form name="myform" class="myform" method="post" action="backend_reg.php">

<div class="sec-div-container">
<h1 style="text-align:center;" >SCHOOL REGISTRATION</h1>

<h3 style="text-align:center;">STUDENT DETAILS</h3>

<script src="../../js/jquery.js"></script>
<script src="../../js/ajax.js"></script>

<div id="masag">
    <div class="msg">
        <div class="max"></div>
        <button  class="aj-btn"><a href="student_reg_system.php">OKAY</a></button>
    </div>
</div>

<table width="100%">

<tr> 
    <td><span>FIRST NAME:</span><input type="text"  name="first" required></td> 
    <td><span>LAST NAME:</span><input type="text"  name="last" required></td>  
    <td><span>MIDDLE NAME:</span><input type="text"  name="mid" required></td> 
</tr>

<tr>
    <td>
        <span>LEVEL:</span>
        <select  name="level" required>
        <option></option>
        <option>100</option>
        <option>200</option>
        <option>300</option>
        <option>400</option>
        <option>500</option>
        <option>600</option>            
        </select>
    </td>
    
    <td><span>REG. NO.:</span><input type="text" name="reg" required></td>

    <td><span>SESSION YEAR:</span> 
        <select name="sess" required>
            <option></option>
            <?php
            $year = date("Y");
            $mon = date("m");
            $by = $year-1;
            $ey = $year+1;
            if ($mon >= 10) {
                echo "<option>$year/$ey</option>";
            }else {
                echo "<option>$by/$year</option>";
            }
            ?>
            
        </select>
    </td>
</tr>



<tr>
    
    <td> <span>STUDENT CONTACT:</span> <input type="text"  name="stcon" required></td> 
    
    <td> <span>DEPARTMENT:</span> 
        <select   name="dep" required>
            <option></option>
            <option>Agriculture</option>
            <option>Agricultural Economics</option>
            <option>Accountancy</option>
            <option>Business Administration</option>
            <option>Marketing</option>
            <option>Zoology</option>
            <option>Botany</option>
            <option>Microbiology</option>
            <option>Music</option>
            <option>Christian religious Studies</option>
            <option>Computer Engineering</option>
            <option>Civil Engineering</option>
            <option>Marine Engineering</option>
            <option>Structural Engineering</option>
            <option>Systems Engineering</option>
            <option>Mechanical Engineering</option>
            <option>Electrical Engineering</option>
            <option>Commercial and Property Law</option>
            <option>Medicine</option>
            <option>surgery</option>
            <option>linguistic and literary studies</option>
            <option>Humanities</option>
            <option>Criminology</option>
            <option>Mass Communication</option> 
            <option>Political science</option>
            <option>Dental Science</option>
            <option>Child Dental Health</option>
            <option>Oral Cavity</option>
            <option>Antropology</option>
            <option>Psychological Sciences</option>
            <option>Economics</option>
        </select>
    </td> 

    <td> <span>FACULTY:</span> 
        <select  name="fac" required>
            <option></option>
            <option>Agricultural Sciences</option>
            <option>Arts</option>
            <option>Biological Sciences</option>
            <option>Management Studies</option>
            <option>Dentistry</option>
            <option>Engineering</option>
            <option>Health Science and Technology</option>
            <option>Law</option>
            <option>Medical Sciences</option>
            <option>Social Sciences</option>
            <option>Pharmaceutical sciences</option>
            <option>Veterinary Sciences</option>
        </select>
        </td> 

</tr>

<tr>
        <td>PASSWORD:<input type="password" name="pass" required></td>
</tr>
</table>



<div class="con-btn-div">
<button class="con-btn">REGISTER</button></div>

</div>

</form> 


</div>

</body>
</html>