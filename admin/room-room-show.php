<?php
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <!-- <h1>
    จัดการโปรโมชั่น

  </h1> -->
  <a href="index.php?menu=room-show" class="btn bg-navy"> <i class="glyphicon glyphicon-menu-left"></i> Back</a>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->



  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->




<h3 class="" style="text-align:left">ห้องของ: <?=$name?></h3>
<div class="box">
  <div class="box-header">
    <!-- add button -->
    <a href="index.php?menu=room-room-addForm&id=<?=$id?>&name=<?=$name?>" class="btn btn-success"><i class="fa fa-plus"></i></a> <br>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-hover text-center">
      <thead>
        <tr>
          <th>No.</th>
          <th>ID</th>
          <th>หมายเลขห้อง</th>
          <th>Edit</th>
          <th>Del</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_room WHERE category_room_id = '$id' " ;
        $rs = mysqli_query($conn, $sql);
        $index = 1;
        while($row = mysqli_fetch_array($rs)){
        ?>
        <tr>
          <td> <?=$index?> </td>
          <td> <?=$row['id']?> </td>
          <td> <?=$row['room_number']?> </td>
          <td> 
            <a href="index.php?menu=room-room-editForm&category_room_id=<?=$id?>&category_room_name=<?=$name?>&id=<?=$row['id']?>&room_number=<?=$row['room_number']?>" class="btn btn-primary"><i class="fa fa-cog"></i></a>
          </td>
          <td>
            <a href="index.php?menu=room-room-delDB&category_room_id=<?=$id?>&category_room_name=<?=$name?>&id=<?=$row['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
            <th>หมายเลขห้อง</th>
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











