<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
?>
<section class="content-header">
  <h1>
    เพิ่มห้อง

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มห้องของ: <?=$name?></h3>
  </div>
  <form class="form-group" action="index.php?menu=room-room-addDB" method="post">
    <div class="box-body">
      <br>
      หมายเลขห้อง
      <input class="form-control" type="text" name="room_number" required>
      <br>
      <input type="hidden" name="id" value="<?=$id?>">
      <input type="hidden" name="name" value="<?=$name?>">
      <input class="btn btn-success" type="submit" value="Add"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
