
<?php
                
$booking_id = $_REQUEST['booking_id'];
$status = $_REQUEST['status'];

$sql="";
if($status == "อนุมัติ"){
    $current_date = date("Y-m-d");
    $sql = "UPDATE tb_booking SET status='$status', time_reg='$current_date' WHERE id = '$booking_id' ";
}else{
    $sql = "UPDATE tb_booking SET status='$status' WHERE id = '$booking_id' ";
}


$result = mysqli_query($conn, $sql);


if ($result) {
    ?>
    <script>
        alert('อัพเดทสถานะลูกค้าเรียบร้อย...!');

        window.location = 'index.php?menu=booking-show';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Edit Fails!!!'+$result);
        window.history.back();
    </script>
    <?php
}
?>