<?php

    $category_room_id = $_REQUEST['category_room_id'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $card_number = $_REQUEST['card_number']; // ใช้เก็บเลขบัตรประชาชน
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];

    $payment_type = $_REQUEST['payment_type'];

    $checkIn = $_REQUEST['checkIn'];
    $checkOut = $_REQUEST['checkOut'];

    $day = $_REQUEST['day'];
    $price = $_REQUEST['price'];
    $total_price = $_REQUEST['total_price'];

    $sql = "INSERT INTO tb_booking(
            category_room_id, 
            room_id, 
            payment_type, 
            first_name, 
            last_name,
            card_number, 
            phone,
            email,
            check_in, 
            check_out, 
            total_price,
            status
        ) VALUES(
            '$category_room_id', 
            '0', 
            '$payment_type', 
            '$firstname', 
            '$lastname',
            '$card_number', 
            '$phone',
            '$email',
            '$checkIn', 
            '$checkOut', 
            '$total_price', 
            'ยังไม่อนุมัติ'
        )";

    $result = mysqli_query($conn, $sql) or die('Error: '.$conn->error);
    $insert_key = mysqli_insert_id($conn);


    if($result){
        
        ?>
        <script type="text/javascript">
            alert('จองห้องพักเรียบร้อย'); 
            window.location = 'index.php?menu=thankyou&card_number=<?=$card_number?>&payment_type=<?php echo $payment_type?>';
        </script>
        <?php        
    }
?>

