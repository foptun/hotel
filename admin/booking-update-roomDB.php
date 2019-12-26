
<?php
                
$booking_id = $_REQUEST['booking_id'];
$room_id = $_REQUEST['room_id'];

$sql = "UPDATE tb_booking SET room_id='$room_id' WHERE id = '$booking_id' ";

$result = mysqli_query($conn, $sql);


if ($result) {
    ?>
    <script>
        alert('จัดหาห้องให้ลูกค้าเรียบร้อย...!');
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