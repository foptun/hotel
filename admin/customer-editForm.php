<?php
$id_customer = $_REQUEST['id_customer'];
$sql = "SELECT * FROM tb_customer WHERE id = '$id_customer'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขประเภทรถ
  
  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขประเภทรถ</h3>
  </div>
  <form class="form-group" action="index.php?menu=customer-editDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      เลขบัตรประชาชน
      <input class="form-control" type="text" name="id_card_number" value="<?php echo $row['id_card_number'];?>" placeholder="เลขบัตรประชาชน">
      </br>
      ชื่อ
      <input class="form-control" type="text" name="firstname" value="<?php echo $row['firstname'];?>" placeholder="ชื่อ">
      </br>
      นามสกุล
      <input class="form-control" type="text" name="lastname" value="<?php echo $row['lastname'];?>" placeholder="นามสกุล">
      <br>
      ที่อยู่
      <textarea class="form-control" name="address" placeholder="ที่อยู่"><?php echo $row['address'];?></textarea>
      <br>
      เบอร์โทร
      <input class="form-control" type="text" name="tel" value="<?php echo $row['tel'];?>" placeholder="เบอร์โทร">
      <br>
      เลขทะเบียนรถ
      <input class="form-control" type="text" name="car_number" value="<?php echo $row['car_number'];?>" placeholder="เลขทะเบียนรถ">
      <br>
      วันที่มาใช้บริการ
      <input class="form-control" type="date" name="date" value="<?php echo $row['date'];?>">
      <br>
      <input type="hidden" name="id_customer" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="Edit"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>

  </form>
  <!-- /.box-body -->
</div>
</div>
