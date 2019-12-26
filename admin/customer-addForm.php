<section class="content-header">
  <h1>
    เพิ่มลูกค้า
  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มลูกค้า</h3>
  </div>
  <form class="form-group" action="index.php?menu=customer-addDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      เลขบัตรประชาชน
      <input class="form-control" type="text" name="id_card_number" placeholder="เลขบัตรประชาชน">
      </br>
      ชื่อ
      <input class="form-control" type="text" name="firstname" placeholder="ชื่อ">
      </br>
      นามสกุล
      <input class="form-control" type="text" name="lastname" placeholder="นามสกุล">
      <br>
      ที่อยู่
      <textarea class="form-control" name="address" placeholder="ที่อยู่"></textarea>
      <br>
      เบอร์โทร
      <input class="form-control" type="text" name="tel" placeholder="เบอร์โทร">
      <br>
      เลขทะเบียนรถ
      <input class="form-control" type="text" name="car_number" placeholder="เลขทะเบียนรถ">
      <br>
      วันที่มาใช้บริการ
      <input class="form-control" type="date" name="date">
      <br>
      <input class="btn btn-success" type="submit" value="Add"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
