<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$detail = $_REQUEST['detail'];
$price = $_REQUEST['price'];
?>
<section class="content-header">
  <h1>
    แก้ไขประเภทห้อง

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขประเภทห้อง: <?=$name?></h3>
  </div>
  <form class="form-group" action="index.php?menu=room-category-editDB" method="post">
    <div class="box-body">
      <br>
      ชื่อประเภทห้อง
      <input class="form-control" type="text" name="name" value="<?=$name?>" required>
      <br>
      รายละเอียด
      <input class="form-control" type="text" name="detail" value="<?=$detail?>" required>
      <br>
      ราคา
      <input class="form-control" type="number" name="price" value="<?=$price?>" required>
      <br>
      <input type="hidden" name="id" value="<?=$id?>">
      <input class="btn btn-primary" type="submit" value="Edit"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
