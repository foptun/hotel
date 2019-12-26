
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการการจอง
  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->





<div class="box">

  <div class="box-header">
    <!-- <a href="index.php?menu=customer-addForm" class="btn btn-info">เพิ่มการจอง</a> -->
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-hover text-center">
      <thead>
      <tr>
        <th>No.</th>
        <th>ห้อง</th>
        <th>ลูกค้า</th>
        <th>CHECK IN</th>
        <th>CHECK OUT</th>
        <th>ราคา</th>
        <th>การชำระเงิน</th>
        <th>สถานะ</th>
        <th>เลือกหมายเลขห้อง</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT tb_category_room.*,tb_category_room_picture.picture,tb_booking.*
        FROM tb_booking, tb_category_room, tb_category_room_picture
        WHERE tb_booking.category_room_id = tb_category_room.id
        AND tb_category_room.id = tb_category_room_picture.category_room_id
        ORDER BY(tb_booking.id) DESC ";
    
        $result = mysqli_query($conn, $sql);
        $index = 1;
        while($row = mysqli_fetch_array($result)){
            $booking_id = $row['id'];
            $category_room_id = $row['category_room_id'];
            $room_id = $row['room_id'];
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
            <td><?php echo $index;?></td>
            <td class="text-center">
                <img src="../upload/<?php echo $row['picture'];?>" height="90"><br>
                <strong><?php echo $row['name'];?></strong>
            </td>
            <td style="text-align: left">
                <strong>ชื่อ:</strong> <?php echo $row['first_name'];?> <?php echo $row['last_name'];?> <br>
                <strong>เบอร์โทร:</strong> <?php echo $row['phone'];?> <br>
                <strong>Email:</strong> <?php echo $row['email'];?>
            </td>
            <td><?php echo date("d-M-Y", strtotime($row['check_in']) );?></td>
            <td><?php echo date("d-M-Y", strtotime($row['check_out']) );?></td>
            <td><?php echo number_format($row['total_price']);?></td>
            <td>
              <?php
              if($row['payment_type'] == 'PromptPay'){
                ?>
                <label class="label label-primary"><?php echo $row['payment_type'];?></label>
                <?php
                if($row['bill'] != null){
                ?>
                <br><br>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $index;?>">
                  ใบเสร็จ PromptPay
                </button>


                <div class="modal fade" id="modal-default<?php echo $index;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">หลักฐานการโอนเงิน</h4>
                      </div>
                      <div class="modal-body">
                        <img src="../upload/<?php echo $row['bill'];?>" height="300">
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="button" class="btn btn-default " data-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <?php
                }

              }else if($row['payment_type'] == 'โอนผ่านธนาคาร'){
                ?>
                <label class="label label-warning"><?php echo $row['payment_type'];?></label>
                <?php
                if($row['bill'] != null){
                ?>
                <br><br>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $index;?>">
                  หลักฐานการโอน
                </button>


                <div class="modal fade" id="modal-default<?php echo $index;?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">หลักฐานการโอนเงิน</h4>
                      </div>
                      <div class="modal-body">
                        <img src="../upload/<?php echo $row['bill'];?>" height="300">
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="button" class="btn btn-default " data-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <?php
                }

              }
              ?>
            </td>
            <td class="text-center">
              <?php
              $status_one = "";
              $status_two = "";
              $status_tree = "";
              if($row['status'] == 'ยังไม่อนุมัติ'){
                $status_one = " selected ";
              }else if($row['status'] == 'รอการอนุมัติ'){
                $status_two = " selected ";
              }else if($row['status'] == 'อนุมัติ'){
                $status_tree = " selected ";
              }
              ?>
              <select name="status" class="form-control" onchange="window.location='index.php?menu=booking-update-statusDB&booking_id=<?php echo $booking_id;?>&status='+this.value+'' ">
                <option value="ยังไม่อนุมัติ" <?php echo $status_one;?> >ยังไม่อนุมัติ</option>
                <option value="รอการอนุมัติ" <?php echo $status_two;?>>รอการอนุมัติ</option>
                <option value="อนุมัติ" <?php echo $status_tree;?>>อนุมัติ</option>
              </select>
            </td>
            <td class="text-center">

                  <select name="room_id" class="form-control" onchange="window.location='index.php?menu=booking-update-roomDB&booking_id=<?php echo $booking_id;?>&room_id='+this.value+'' ">

                    <option value="0"> ยังไม่มีห้อง</option>

                  <?php
                  $sql = "SELECT * FROM tb_room WHERE category_room_id='$category_room_id'";
                  $resultRoom = mysqli_query($conn, $sql);
                  while($rowRoom = mysqli_fetch_array($resultRoom)){
                    $txtShowStatusRoom="";
                    $sql3 = "SELECT * FROM tb_booking WHERE category_room_id = '$category_room_id' AND room_id = '".$rowRoom['id']."' ";
                    $rs3 = mysqli_query($conn, $sql3);
                    // $row3 = mysqli_fetch_array($rs3);
                    if(mysqli_num_rows($rs3) > 0){
                      $txtShowStatusRoom = "ไม่ว่าง";
                      if($row['room_id'] == $rowRoom['id']){
                        ?>
                          <option value="<?php echo $rowRoom['id'];?>" selected>
                          <?php echo $rowRoom['room_number'];?> (จอง)
                          </option>
                          <?php
                      }else{
                        //
                      }
                    }else{
                      $txtShowStatusRoom = "ว่าง";
                      if($row['room_id'] != $rowRoom['id']){
                      ?>
                      <option value="<?php echo $rowRoom['id'];?>">
                          <?php echo $rowRoom['room_number'];?> 
                      </option>
                      <?php
                      }
                    }
                  }
                  ?>
                  </select>

            </td>
        </tr>
        <?php
          $index++;
        }
        ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No.</th>
        <th>ห้อง</th>
        <th>ลูกค้า</th>
        <th>CHECK IN</th>
        <th>CHECK OUT</th>
        <th>ราคา</th>
        <th>การชำระเงิน</th>
        <th>สถานะ</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->












 <!-- ccc -->



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
<!-- </div> -->











