<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $crse = $_POST['course'];
    $dep = $_POST['dep'];
    $fac = $_POST['fac'];
    $date = date("d/m/y");
    $hour = date("h")+1;
    $time = date("$hour:i:s.a");

    require("class/class.php");

    $c_in = new ATT();
    $c_inp = $c_in->crsen($crse,$dep,$fac,$date,$time); 
    if ($c_inp) {
        header("location:course_dis.php?msg='COURSE UPLOADED'");
    }else {
        header("location:course_dis.php?msg='COURSE NOT UPLOADED'");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
</head>
<body>
    <fieldset>
    <form method="post" name="cf" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <p>COURSES</p>
        <p>
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
        </p>


        <p>DEPARTMENT</p>
        <p>
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
        </p>

        <p>FACULTY</p>
        <p>
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
        </p>

        <p><button>UPLOAD COURSE</button></p>
    </form>
    </fieldset>

</body>
</html>