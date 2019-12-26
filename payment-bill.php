<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">พักผ่อนกับวันสบายๆ</h1>
                    <p>พักผ่อนไปกับเรา <a href="#">CACTUS</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $booking_id = $_REQUEST['booking_id']; // ใช้เก็บเลขบัตรประชาชน
    $card_number = $_REQUEST['card_number']; // ใช้เก็บเลขบัตรประชาชน

    $sql = "SELECT tb_category_room.*,tb_category_room_picture.picture,tb_booking.*

    FROM tb_booking, tb_category_room, tb_category_room_picture
    
    WHERE tb_booking.category_room_id = tb_category_room.id
    AND tb_category_room.id = tb_category_room_picture.category_room_id
    AND tb_booking.id = '$booking_id'
    AND tb_booking.status != 'อนุมัติ'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $checkIn = date("d-M-Y", strtotime($row['check_in']) );
    $checkOut = date("d-M-Y", strtotime($row['check_out']) );

    $date1 = date_create($row['check_in']);
    $date2 = date_create($row['check_out']);

    $interval = date_diff($date1, $date2);

    $show_room_qty = $interval->days;
?>

<div id="featured-hotel" class="">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12" id="booking-header">
                <h1>ห้องพักของคุณ</h1>
            </div>
        </div>

        <div class="row">
            <div class="feature-full-1col">
                <div class="image" style="background-image: url(upload/room-1.jpg);">
                    <div class="descrip text-center">
                        <p><small>ราคาเพียง</small><span><?php echo number_format($row['price']);?>/คืน</span></p>
                    </div>
                </div>
                <div class="desc">
                    <h3><?php echo $row['name'];?> </h3>
                    <p>
                    <?php echo $row['detail'];?>
                    </p>
                    <p><font color='orange'>ระยะเวลา <?php echo $show_room_qty;?> วัน </font>  | 
                        <font color='#ff5722'> <?php echo number_format($row['total_price']);?> บาท </font> <br>
                        <font color='green'>วันที่:  <?php echo $checkIn;?> ถึง  <?php echo $checkOut;?></font>
                    </p>
                </div>
            </div>

        </div>
        
        <div class="row">
            <form action="index.php?menu=payment-bill-db" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="form-group">
                        <h3>ราคา:
                        <font color='#ff5722'><?php echo number_format($row['total_price']);?></font> บาท
                        </h3>
                        <br>
                        <h3>โอนผ่านธนาคาร</h3>
                        <label>ธนาคารกสิกรไทย</label> เลขที่บัญชี: 224-002-3658 ชื่อ: Cactus Hoel(แค็คตัส โฮเทล) <br>
                        <label>ธนาคารกรุงเทพ</label> เลขที่บัญชี: 845-632-4567 ชื่อ: Cactus Hoel(แค็คตัส โฮเทล) <br>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>หลักฐานการโอน</label>
                        <img id="ex_img" src="#" alt="" height="200" />
                        <input type="file" name="file" class="form-control" onchange="readURL(this)" required>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <input type="hidden" name="card_number" value="<?php echo $card_number;?>">
                        <input type="hidden" name="booking_id" value="<?php echo $booking_id;?>">
                        <input type="submit" value="ส่งหลักฐานการชำระเงิน" class="btn btn-primary">
                    </div>
                </div>
                
            </form>
        </div>


        



    </div>
</div>
