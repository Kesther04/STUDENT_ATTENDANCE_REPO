    
<script src="../../js/jquery.js"></script>
<script src="../../js/ajax.js"></script>

<?php  if ($_SERVER['REQUEST_METHOD']=="POST") {  ?>

<?php
    $reg = $_POST['reg_no'];
    $course = $_POST['course'];
?>

<?php 
    require("../../class/sel_class.php");   
    $sel_obj = new SELE();
?>


<?php
    $selcourse = $sel_obj->coral($reg,$course);
    if ($selcourse) {  
?>


    <h1 style="text-transform:uppercase;">ATTENDANCE OF STUDENT  ON <?php echo $course;  ?></h1>
    <div class="att-sec">
    <table>
        <tr id="c-att-d">
            <td>COURSE</td>
            <td>DATE</td>
            <td>TIME</td>
        </tr>

        <?php while ($row = $selcourse->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>



<?php  } ?>

<?php } ?>

