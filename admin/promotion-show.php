
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    จัดการโปรโมชั่น

  </h1>
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





<div class="box">

  <div class="box-header">
    <a href="index.php?menu=promotion-addForm" class="btn btn-info">เพิ่มโปรโมชั่น</a>
    <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No.</th>
        <th>ชื่อโปรโมชั่น</th>
        <th>รูปภาพ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tb_promotion";
        $query = $conn->query($sql);

        $no = 1;
        while ($row = $query->fetch_array()) {
        ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['promotion_name']; ?></td>
        <td>
          <img src="data:image/jpeg;base64,<?=base64_encode($row['picture']);?>" alt="" height="32">
        </td>
        <td>
          <a href="index.php?menu=promotion-editForm&id_promotion=<?php echo $row['id'];?>" class="btn btn-primary"> Edit </a>
        </td>
        <td>
          <a href="index.php?menu=promotion-delDB&id_promotion=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Confirm Delete!');"> Del </a>
        </td>
      </tr>
      <?php
    }
      ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No.</th>
        <th>ชื่อโปรโมชั่น</th>
        <th>รูปภาพ</th>
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
