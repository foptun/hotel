<section class="content-header">
  <h1>
    เพิ่มประเภทห้อง

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มประเภทห้อง</h3>
  </div>
  <form class="form-group" action="index.php?menu=room-category-addDB" method="post">
    <div class="box-body">
      <br>
      ชื่อประเภทห้อง
      <input class="form-control" type="text" name="name" required>
      <br>
      รายละเอียด
      <input class="form-control" type="text" name="detail" required>
      <br>
      ราคา
      <input class="form-control" type="number" name="price" required>
      <br>
      <input class="btn btn-success" type="submit" value="Add"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
