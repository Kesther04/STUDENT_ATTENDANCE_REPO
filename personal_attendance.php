<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="school_reg.css" media="all">
    <link rel="stylesheet" href="rep_school_reg.css" media="all">
    <title>ATTENDANCE</title>
</head>

<body>
    
    <?php require("admin_dashboard_layout.php"); ?>

    <script src="jquery.js"></script>
    <script src="ajax.js"></script>


    <section  class="main-div-container">

    
    <form name="myform" class="scourseform" method="post" action="per_course_check.php">

    <div class="before-sec-div-container">
        <h1 style="text-align:center;">STUDENT ATTENDANCE CHECK</h1>

        <?php  
             require("class/sel_class.php");   
             $sel_obj = new SELE();  
        ?>
        
        <table>
            <tr>
           
            <td>
                    <span>STUDENT REG. NUMBER:</span>
                   <input type="text" name="reg_no">
                </td>

            
                <td>
                    <span> COURSES:</span>
                   <select  name="course">
                        <option></option>
                <option>Economics</option>
                <option>Mathematics</option>
                <option>Computer Science</option>
                <option>Biochemistry</option>
                <option>Mass Communication</option>
                <option>Chemistry</option>
                <option>Physics</option>
                <option>Mechanical Engineering</option>
                <option>Microbiology</option>
                <option>Biological sciences</option>
                <option>Computer Engineering</option>
                <option>Eelectronic Engineering</option>
                <option>Statistics</option>
                <option>Architecture</option>
                <option>Botany</option>
                <option>Veterinary Medicine</option>
                <option>Electrical Engineering</option>
                <option>Metallurgy</option>
                <option>Geology</option>
                <option>Zoology</option>
                <option>Enviromental Sciences</option>
                <option>Chemical Engineering</option>
                <option>Software Engineering</option>
                <option>Engineering</option>
                    </select>
                </td>
          
        </tr>
        </table>

        
    <div class="con-btn-div">
        <button class="con-btn">VIEW</button></div>
    </div>

    </div>


    </form>

    <div class="seco-div-container" id="vis-con"></div>
    
    </section>


</body>
</html>