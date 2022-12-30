<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/school_reg_pub.css" media="all">
    <link rel="stylesheet" href="../css/rep_school_reg.css" media="all">
    <title>SIGN IN</title>
</head>
<body>
    <div class="main-div-container">

    <form name="myform" class="mxform" method="post" action="backend_class_sign_in.php">
    
    <div class="sec-div-container">
    <h1 style="text-align:center;">STUDENT SIGN UP</h1>
        
    <div id="masag">
        <div class="msg">
            <div class="msa"></div>
            <button class="aj-btn"><a href="student_sign_in.php">OKAY</a></button>
        </div>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/ajax.js"></script>
    
    <table width="100%">
    <tr>
        <td>
            <span>COURSE:</span>
            <select  name="course" required>
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
    
    
    

        <td><span>REG NO:</span><input type="text"  name="reg" required></td> 
    </tr>    
    
    <tr>
        <td><span>PASSWORD:</span><input type="text"  name="pass" required></td> 
    </tr>
    </table>

    
    <div class="con-btn-div">
        <button class="con-btn">SIGN IN</button>
    </div>
    
    </div>

    </form>
    
    </div>
</body>
</html>