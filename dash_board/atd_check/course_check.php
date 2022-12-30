    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/ajax.js"></script>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $dep = $_POST['dep'];
    $date = $_POST['date'];
   
?>

<?php 
    require("../../class/sel_class.php");   
    $sel_obj = new SELE();  
   
    if ($date == "ALL") {
?>

<?php  
    $selde_all = $sel_obj->seldall($dep);
    if ($selde_all) {
?>


    <h1> Attendance for <?php echo  $dep   ?> Courses on <?php echo  $date  ?> Dates</h1>
    <div class="att-sec">
    <table>
        <tr id="c-att-d">
            <td>COURSE</td>
            <td>ATTENDANCE</td>
            <td>VIEW_STUDENTS</td>
        </tr>

        <?php while ($dow = $selde_all->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $dow['course']; ?></td>
            <td><?php echo $sel_obj->num_att_al($dow['course'])?></td>
            <td>
                <form name="btn-form" action="student_course_check.php" class="scc-form" method="post">
                    <input type="hidden" value="<?php echo $dow['course']; ?>" name="course" required readonly>
                    <input type="hidden" value="<?php echo $date; ?>" name="date" required readonly>
                    <button class="aj-btn">VIEW</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>



<?php } }else {   ?>

<?php
    $seldepart = $sel_obj->seld($dep,$date);
    if ($seldepart) {  
?>

    <h1> Attendance for <?php echo  $dep   ?> Courses on <?php echo  $date  ?></h1>
    <div class="att-sec">
    <table>
        <tr id="c-att-d">
            <td>COURSE</td>
            <td>ATTENDANCE</td>
            <td>DATE</td>
            <td>VIEW_STUDENTS</td>
        </tr>

        <?php while ($row = $seldepart->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $sel_obj->num_att($row['course'],$date)?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <form name="btn-form" action="student_course_check.php" class="scc-form" method="post">
                    <input type="hidden" value="<?php echo $row['course']; ?>" name="course" required readonly>
                    <input type="hidden" value="<?php echo $row['date']; ?>" name="date" required readonly>
                    <button class="aj-btn">VIEW</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>



<?php } } ?>

<?php } ?>

