<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $course = $_POST['course'];
    $date = $_POST['date'];

?>

<?php 
    require("../../class/sel_class.php");   
    $sel_obj = new SELE();  
   
?>

<?php if ($date == "ALL") {  ?>

    <?php
    $selnamas = $sel_obj->selan($course);
    if ($selnamas) { 
    ?>

    <div class="att-sec">
    <table>
        <tr id="c-att-d">
            <td>FULLNAME</td>
            <td>REG_NO.</td>
            <td>DATE</td>
            <td>TIME</td>
        </tr>

        <?php while ($dow = $selnamas->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $dow['fullname']; ?></td>
            <td><?php echo $dow['reg_no']?></td>
            <td><?php echo $dow['date']; ?></td>
            <td><?php echo $dow['time']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>


<?php }  ?>

<?php }else{ ?>

<?php
    $selnames = $sel_obj->seln($course,$date);
    if ($selnames) { 
?>

    <div class="att-sec">
    <table>
        <tr id="c-att-d">
            <td>FULLNAME</td>
            <td>REG_NO.</td>
            <td>DATE</td>
            <td>TIME</td>
        </tr>

        <?php while ($row = $selnames->fetch_assoc()) {  ?>
        <tr>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['reg_no']?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>


<?php }  ?>

<?php } } ?>