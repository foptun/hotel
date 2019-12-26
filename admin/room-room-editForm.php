<?php
$id = $_REQUEST['id'];

$category_room_id = $_REQUEST['category_room_id'];
$category_room_name = $_REQUEST['category_room_name'];

$room_number = $_REQUEST['room_number'];
?>
<section class="content-header">
  <h1>
    แก้ไขห้อง
  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-primary">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขห้องของ: <?=$name?></h3>
  </div>
  <form class="form-group" action="index.php?menu=room-room-editDB" method="post">
    <div class="box-body">
      <br>
      หมายเลขห้อง
      <input class="form-control" type="text" name="room_number" value="<?=$room_number?>" required>
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
