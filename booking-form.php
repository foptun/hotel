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
    $category_room_id = $_REQUEST['category_room_id'];
    $name = $_REQUEST['name'];
    $detail = $_REQUEST['detail'];
    $picture = $_REQUEST['picture'];
    $card_number = ""; // ใช้เก็บเลขบัตรประชาชน
    $phone = "";

    $checkIn = $_REQUEST['checkIn'];
    $checkOut = $_REQUEST['checkOut'];

    $day = $_REQUEST['day'];
    $price = $_REQUEST['price'];
    $total_price = $_REQUEST['total_price'];
?>
  


<div id="featured-hotel" class="fh5co-bg-color">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 text-center" id="booking-header">
                <h1>กรอกรายละเอียดในการจองห้องพัก</h1>
            </div>
            <div class="feature-full-1col">
                <div class="image" style="background-image: url(upload/<?php echo $picture;?>);">
                    <div class="descrip text-center">
                        <p><small>ราคาเพียง</small><span><?php echo number_format($price);?>฿/คืน</span></p>
                    </div>
                </div>
                <div class="desc">
                    <h3><?php echo $name;?></h3>
                    <p>
                        <font color='orange'>ระยะเวลา <?php echo $day;?> วัน </font>  <br>
                        <font color='#ff5722'> ราคา <?php echo number_format($total_price);?> บาท </font>
                    </p>
                    <p><?php echo $detail;?></p>
                    <!-- <p>

                        <a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a>
                    </p> -->
                </div>
            </div>


            <div class="feature-full-2col" >
                
                <div class="desc">
                    <form action="index.php?menu=booking-form-payment" method="post">
                        <input type="hidden" name="menu" value="booking-form-payment">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>เลขบัตรประชาชน</label>
                                    <input type="text" class="form-control" name="card_number" placeholder="เลขบัตรประชาชน 13 หลัก" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>นามสกุล</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>เบอร์โทร</label>
                                    <input type="text" class="form-control" name="phone" placeholder="เบอร์โทร" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-center">

                                    <input type="hidden" name="category_room_id" value="<?php echo $category_room_id;?>">
                                    <input type="hidden" name="name" value="<?php echo $name;?>">
                                    <input type="hidden" name="detail" value="<?php echo $detail;?>">
                                    <input type="hidden" name="day" value="<?php echo $day;?>">
                                    <input type="hidden" name="total_price" value="<?php echo $total_price;?>">
                                    <input type="hidden" name="checkIn" value="<?php echo $checkIn;?>">
                                    <input type="hidden" name="checkOut" value="<?php echo $checkOut;?>">

                                    <input type="button" value="กลับ" class="btn btn-default" onclick="window.history.back()">
                                    <input type="submit" value=" ยืนยัน " class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>