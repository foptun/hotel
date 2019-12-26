<?php
$id_promotion = $_REQUEST['id_promotion'];
$sql = "SELECT * FROM tb_promotion WHERE id = '$id_promotion'";
$query = $conn->query($sql);
$row = $query->fetch_array();
?>
<section class="content-header">
  <h1>
    แก้ไขโปรโมชั่น

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">แก้ไขโปรโมชั่น</h3>
  </div>
  <form class="form-group" action="index.php?menu=promotion-editDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      Name
      <input class="form-control" type="text" name="name" value="<?php echo $row['promotion_name'];?>" placeholder="Name">
      <br>
      Image.
      <img id="ex_img" src="data:image/jpeg;base64,<?=base64_encode($row['picture']);?>" alt="" width="64" />
      <input type="file" name="file" class="form-control" onchange="readURL(this)" >
      <br>
      <input type="hidden" name="id_promotion" value="<?php echo $row['id'];?>">
      <input class="btn btn-primary" type="submit" value="Edit"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
