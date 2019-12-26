<section class="content-header">
  <h1>
    เพิ่มโปรโมชั่น

  </h1>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<div class="box box-success">
  <div class="box-header with-border">
      <h3 class="box-title">เพิ่มโปรโมชั่น</h3>
  </div>
  <form class="form-group" action="index.php?menu=promotion-addDB" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <br>
      ชื่อโปรโมชั่น
      <input class="form-control" type="text" name="name" placeholder="ชื่อโปรโมชั่น">
      <br>
      รูปภาพ
      <img id="ex_img" src="#" alt="" width="64" />
      <input type="file" name="file" class="form-control" onchange="readURL(this)">
      <br>
      <input class="btn btn-success" type="submit" value="Add"> 
      <a href="#" onclick="window.history.back();" class="btn btn-default">Cancel</a>
    </div>
  </form>
  <!-- /.box-body -->
</div>
</div>
