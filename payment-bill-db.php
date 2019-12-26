<?php
    $file_name = $_FILES['file']['name'];  
    $temp_name = $_FILES['file']['tmp_name']; 

    $card_number = $_POST['card_number'];
    $booking_id = $_POST['booking_id'];
    
    $file_name = uniqid().$file_name;

    $sql = "UPDATE tb_booking SET bill='$file_name', status='รอการอนุมัติ' WHERE id='$booking_id' ";

    $result = mysqli_query($conn, $sql);

    //   $id_subject = $conn->insert_id;
    move_uploaded_file($temp_name, 'upload/'.$file_name);

    if ($result) {
        ?>
        <script>
            alert('ส่งหลักฐานการชำระเงินเรียบร้อย');
            window.location = 'index.php?menu=payment-end&card_number=<?=$card_number?>';
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Insert Fails!!!');
            window.history.back();
        </script>
        <?php
    }

?>