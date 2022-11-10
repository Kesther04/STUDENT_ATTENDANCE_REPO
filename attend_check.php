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

   

    <section  class="main-div-container" >

    
    <form name="" class="scc-hid-form" action="student_course_check.php" method="post">
    <div id="masag-con">
        <div class="msgas">
            <div class="sec-msa"></div>
            <button class="aj-btn">OKAY</button>
        </div>
    </div>
    </form>

    
    <form name="myform" class="depform" method="post" action="course_check.php">

    <div class="before-sec-div-container">
        <h1 style="text-align:center;">DEPARTMENT</h1>

        <?php   require("class/sel_class.php");   $sel_obj = new SELE();  ?>
        <table>
            <tr>
           
            <td>
                    <span>DEPARTMENT:</span>
                    <select  name="dep" required>
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
            
        <td>
            <span>DATE:</span>
            <select name="date" required>
                <option></option>
                <?php 

                    $func_ob = $sel_obj->seldate();
                    if ($func_ob) {
                        while ($selow=$func_ob->fetch_assoc()) {
                ?>

                <option><?php echo  $selow['date']; ?></option>

                <?php  } } ?>
                <option>ALL</option>
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