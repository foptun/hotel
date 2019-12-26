


<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->




<h3 class="" style="text-align:center">ประเภทห้อง</h3>
<div class="box">
  <div class="box-header">
    
    <!-- add button -->
    <a href="index.php?menu=room-category-addForm" class="btn btn-success"><i class="fa fa-plus"></i></a> <br>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-hover text-center">
      <thead>
        <tr>
          <th>No.</th>
          <th>ID</th>
          <th>ประเภทห้อง</th>
          <th>รายละเอียด</th>
          <th>ราคา</th>
          <th>จัดการรูปภาพ</th>
          <th>จัดการห้อง</th>
          <th>Edit</th>
          <th>Del</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_category_room";
        $rs = mysqli_query($conn, $sql);
        $index = 1;
        while($row = mysqli_fetch_array($rs)){
        ?>
        <tr>
          <td> <?=$index?> </td>
          <td> <?=$row['id']?> </td>
          <td> <?=$row['name']?> </td>
          <td> <?=$row['detail']?> </td>
          <td> <?=number_format($row['price'])?> </td>
          <td> 
            <a href="index.php?menu=room-picture-show&id=<?=$row['id']?>&name=<?=$row['name']?>" class="btn bg-purple btn-flat"><i class="fa fa-picture-o"></i></a>
          </td>
          <td> 
            <a href="index.php?menu=room-room-show&id=<?=$row['id']?>&name=<?=$row['name']?>" class="btn bg-maroon"><i class="fa fa-hotel"></i></a>
          </td>
          <td> 
            <a href="index.php?menu=room-category-editForm&id=<?=$row['id']?>&name=<?=$row['name']?>&detail=<?=$row['detail']?>&price=<?=$row['price']?>" class="btn btn-primary"><i class="fa fa-cog"></i></a>
          </td>
          <td>
          <a href="index.php?menu=room-category-delDB&id=<?=$row['id']?>&name=<?=$row['name']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
          <th>ID</th>
          <th>ประเภทห้อง</th>
          <th>รายละเอียด</th>
          <th>ราคา</th>
          <th>จัดการรูปภาพ</th>
          <th>จัดการห้อง</th>
          <th>Edit</th>
          <th>Del</th>
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











