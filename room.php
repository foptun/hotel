


<div class="fh5co-parallax" style="background-image: url(images/slider2.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                <div class="fh5co-intro fh5co-table-cell">
                    <h1 class="text-center">ทำให้วันหยุดของคุณสะดวกสบาย</h1>
                    <p>พักผ่อนไปกับเรา <a href="#">CACTUS</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="wrap">
    <div class="container">
        
        <div class="row" id="booking-header">
            <div id="availability">
                <form action="index.php?menu=room" id="searchForm" method="get" >
                    <input type="hidden" name="menu" value="<?php echo $_REQUEST['menu'];?>">
                    <input type="hidden" name="search" value="yes">
                    
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-start">Check In</label>
                            <input type="text" class="datepicker" id="dateCheckIn" name="checkIn" required>
                        </div>
                    </div>
                    <div class="a-col alternate">
                        <div class="input-field">
                            <label for="date-end">Check Out</label>
                            <input type="text" class="form-control" id="dateCheckOut" name="checkOut"  required>
                        </div>
                    </div>
                    <div class="a-col">
                      
                    </div>
                    <button type="submit" class="a-col action ">
                        <a>
                            <span>Check</span>
                            Availability
                        </a>
                    </button>
                        
                </form>
            </div>
        </div>
    </div>
</div>



<div id="fh5co-hotel-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" >
                <?php

                $checkIn = date("Y-m-d", strtotime($_REQUEST['checkIn']) );
                $checkOut = date("Y-m-d", strtotime($_REQUEST['checkOut']) );

                if(isset($_REQUEST['search'])){
                ?>
                    <h3 align="left">OUR Rooms Check In: <font color="#ff5722"><?php echo date("d-M-Y", strtotime($checkIn) );?></font> |  
                        Check Out: <font color="#ff5722"><?php echo date("d-M-Y", strtotime($checkOut) );?></font> </h3>
                <?php
                }else{
                ?>
                    <h1 >OUR ROOMS </h1>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <?php

            $show_room_qty = "";
            $intervalDay = 0;
            
            if(isset($_REQUEST['search'])){
                
                $date1 = date_create($_REQUEST['checkIn']);
                $date2 = date_create($_REQUEST['checkOut']);
                $interval = date_diff($date1, $date2);

                $intervalDay = $interval->days;

            }
            $sql = "SELECT * FROM tb_category_room";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $category_room_id = $row['id'];
                $category_room_name = $row['name'];
                $category_room_detail = $row['detail'];

                $sqlPicture = "SELECT * FROM tb_category_room_picture WHERE category_room_id = '$category_room_id' LIMIT 1 ";
                $resultPicture = mysqli_query($conn, $sqlPicture);
                $rowPic = mysqli_fetch_array($resultPicture);

                $sqlCountAllRoom = "SELECT COUNT(tb_room.id) all_room FROM tb_room WHERE category_room_id = '$category_room_id' ";
                $resultCountAllRoom = mysqli_query($conn, $sqlCountAllRoom);
                $rowAllRoom = mysqli_fetch_array($resultCountAllRoom);

                $sqlCountUseRoom = "SELECT COUNT(tb_booking.room_id) use_room FROM tb_booking 
                                    WHERE category_room_id = '$category_room_id' 
                                    AND room_id != 0 
                                    AND (check_in <= '$checkIn' AND check_out >= '$checkIn')
                                    AND (check_in <= '$checkOut' AND check_out >= '$checkOut') ";
                $resultCountUseRoom = mysqli_query($conn, $sqlCountUseRoom);
                $rowUseRoom = mysqli_fetch_array($resultCountUseRoom);

                $all_room = $rowAllRoom['all_room'];
                $use_room = $rowUseRoom['use_room'];
                $total_room = $all_room - $use_room;

                $price = $row['price'];
                $total_price = $price  * $intervalDay;
                if(isset($_REQUEST['search'])){
                    if($total_room > 0){
                            $show_room_qty = "<p><font color='orange'>ระยะเวลา $intervalDay วัน </font>  | 
                                                <font color='#ff5722'> ".number_format($total_price)." บาท </font> <br>
                                                <font color='green'>มีห้องว่าง  $total_room  ห้อง</font></p>";
                        
                    }else{
                        $show_room_qty = "<p><font color='red'>ไม่มีมีห้องว่าง</font></p>";
                    }
                }
            ?>
            <div class="col-md-4">
                <div class="hotel-content">
                    <div class="hotel-grid" style="background-image: url(upload/<?php echo $rowPic['picture'];?>);">
                        <div class="price text-center"><small>ราคาเพียง</small><span><?php echo number_format($row['price']);?>฿/คืน</span></div>
                        <?php
                        if(isset($_REQUEST['search'])){
                        ?>
                            <form action="index.php" method="get" id="bookingForm">
                                <input type="hidden" name="menu" value="booking-form">
                                
                                <input type="hidden" name="category_room_id" value="<?php echo $category_room_id;?>">
                                <input type="hidden" name="name" value="<?php echo $category_room_name;?>">
                                <input type="hidden" name="detail" value="<?php echo $category_room_detail;?>">
                                <input type="hidden" name="picture" value="<?php echo $rowPic['picture'];?>">
                                <input type="hidden" name="day" value="<?php echo $intervalDay;?>">
                                <input type="hidden" name="price" value="<?php echo $price;?>">
                                <input type="hidden" name="total_price" value="<?php echo $total_price;?>">
                                <input type="hidden" name="checkIn" value="<?php echo $checkIn;?>">
                                <input type="hidden" name="checkOut" value="<?php echo $checkOut;?>">
                                <button class="book-now text-center" type="submit" ><i class="ti-calendar"></i> Book Now</button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="desc">
                        <h3><a href="index.php?menu=room-detail"><?php echo $row['name'];?></a> </h3>
                        <?php echo $show_room_qty;?>
                        <p>
                            <?php echo $row['detail'];?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>