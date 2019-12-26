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
    $card_number = $_POST['card_number']; // ใช้เก็บเลขบัตรประชาชน
    
    
        ?>

<div id="featured-hotel" class="">
    <div class="container">
        
        
        <div class="row">
            <div class="col-md-12" id="booking-header">
                <h1>รายการจองของคุณ</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead >
                        <tr>
                            <th>NO.</th>
                            <th class="text-center">ห้องที่จอง</th>
                            <th>ลูกค้า</th>
                            <th>CHECK IN</th>
                            <th>CHECK OUT</th>
                            <th>ราคา</th>
                            <th>การชำระเงิน</th>
                            <th class="text-center">สถานะ</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT tb_category_room.*,tb_category_room_picture.picture,tb_booking.*

                        FROM tb_booking, tb_category_room, tb_category_room_picture
                        
                        WHERE tb_booking.category_room_id = tb_category_room.id
                        AND tb_category_room.id = tb_category_room_picture.category_room_id
                        AND tb_booking.card_number = '$card_number' ";
                    
                        $result = mysqli_query($conn, $sql);
                        $index = 1;
                        while($row = mysqli_fetch_array($result)){
                            $booking_id = $row['id'];
                            $card_number = $row['card_number'];
                            $colorStatus = "";
                            $btn_title = "";
                            if($row['status'] == 'ยังไม่อนุมัติ'){
                                $colorStatus = "primary";
                                $btn_title = "ชำระเงิน";
                            }else if($row['status'] == 'รอการอนุมัติ'){
                                $colorStatus = "info";
                                $btn_title = "ใช้หลักฐานใหม่";
                            }else if($row['status'] == 'อนุมัติ'){
                                $colorStatus = "success";
                            }
                        ?>
                        <tr>
                            <td><?php echo $index++;?></td>
                            <td class="text-center">
                                <img src="upload/<?php echo $row['picture'];?>" height="150"><br>
                                <strong><?php echo $row['name'];?></strong>
                            </td>
                            <td>
                                <strong>ชื่อ:</strong> <?php echo $row['first_name'];?> <?php echo $row['last_name'];?> <br>
                                <strong>เบอร์โทร:</strong> <?php echo $row['phone'];?> <br>
                                <strong>Email:</strong> <?php echo $row['email'];?>
                            </td>
                            <td><?php echo date("d-M-Y", strtotime($row['check_in']) );?></td>
                            <td><?php echo date("d-M-Y", strtotime($row['check_out']) );?></td>
                            <td><?php echo number_format($row['total_price']);?></td>
                            <td>
                                <span style="color:steelblue; font-weight: bold; ">
                                    <?php echo $row['payment_type'];?>
                                </span>
                            </td>
                            <td class="text-center">
                                <label class="label label-<?php echo $colorStatus;?>">
                                    <?php echo $row['status'];?>
                                </label>
                            </td>
                            <td class="text-center">
                                <?php
                                if($row['payment_type'] == 'PromptPay'){
                                    if($row['status'] == 'อนุมัติ'){
                                        ?>
                                        <label class="label label-success">
                                            เรียบร้อย
                                        </label>
                                        <?php
                                    }else{
                                        ?>
                                            <a href="index.php?menu=payment-promptpay-bill&card_number=<?=$card_number?>&booking_id=<?php echo $booking_id;?>" class="btn btn-<?php echo $colorStatus;?>" ><?php echo $btn_title;?></a>
                                        <?php
                                    }
                                }else if($row['payment_type'] == 'โอนผ่านธนาคาร'){
                                    if($row['status'] == 'อนุมัติ'){
                                        ?>
                                        <label class="label label-success">
                                            เรียบร้อย
                                        </label>
                                        <?php
                                    }else{
                                        ?>
                                        <a href="index.php?menu=payment-bill&card_number=<?=$card_number?>&booking_id=<?php echo $booking_id;?>" class="btn btn-<?php echo $colorStatus;?>" ><?php echo $btn_title;?></a>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>     


        



    </div>
</div>
