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
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $card_number = $_REQUEST['card_number']; // ใช้เก็บเลขบัตรประชาชน
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];

    $checkIn = $_REQUEST['checkIn'];
    $checkOut = $_REQUEST['checkOut'];

    $day = $_REQUEST['day'];
    $price = $_REQUEST['price'];
    $total_price = $_REQUEST['total_price'];
?>

<div id="fh5co-blog-section">
    <div class="container text-center">



        <form action="index.php?menu=booking-db" method="post">
            <input type="hidden" name="menu" value="booking-db">

            <div class="row">
                <div class="col-md-12" id="booking-header">
                    <h3>การชำระเงิน</h3>
                </div>

                <div class="col-md-3">
                    <!-- div ว่าง -->
                </div>
                <div class="col-md-3">
                    <div class="desc" >
                        <h3>
                            ชำระผ่าน Prompt Pay <br>
                            <input type="radio" class="text-center" name="payment_type" value="PromptPay" checked>
                        </h3>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="desc">
                        <h3>
                            โอนผ่านธนาคาร <br>
                            <input type="radio" class="text-center" name="payment_type" value="โอนผ่านธนาคาร" >
                        </h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- div ว่าง -->
                </div>

                <div class="col-md-12">
                    <div class="form-group text-center">

                        <input type="hidden" name="category_room_id" value="<?php echo $category_room_id;?>">
                        <input type="hidden" name="card_number" value="<?php echo $card_number;?>">
                        <input type="hidden" name="firstname" value="<?php echo $firstname;?>">
                        <input type="hidden" name="lastname" value="<?php echo $lastname;?>">
                        <input type="hidden" name="phone" value="<?php echo $phone;?>">
                        <input type="hidden" name="email" value="<?php echo $email;?>">
                        <input type="hidden" name="total_price" value="<?php echo $total_price;?>">
                        <input type="hidden" name="checkIn" value="<?php echo $checkIn;?>">
                        <input type="hidden" name="checkOut" value="<?php echo $checkOut;?>">

                        <input type="submit" value="กลับ" class="btn btn-default" onclick="window.location='index.php?menu=room' ">
                        <input type="submit" value=" ยืนยัน " class="btn btn-primary">

                    </div>
                </div>
            </div>
        </form>



    </div>
</div>


