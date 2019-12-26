<?php
$category_room_id = $_REQUEST['category_room_id'];
$category_room_name = $_REQUEST['category_room_name'];
$id = $_REQUEST['id'];
$picture = $_REQUEST['picture'];
?>
<section class="content-header">
  <h1>
    แก้ไขรูปภาพ

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขรูปภาพของ: <?=$category_room_name?></h3>
  </div>
  <form class="form-group" action="index.php?menu=room-picture-editDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      รูปภาพ
      <img id="ex_img" src="../upload/<?=$picture?>" alt="" height="300" />
      <input type="file" name="file" class="form-control" onchange="readURL(this)" required>
      <br>
      <input type="hidden" name="category_room_id" value="<?=$category_room_id?>">
      <input type="hidden" name="category_room_name" value="<?=$category_room_name?>">
      <input type="hidden" name="id" value="<?=$id?>">
      <input class="btn btn-primary" type="submit" value="Edit"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
