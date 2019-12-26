<?php

$sql = "SELECT time_reg FROM tb_booking GROUP BY YEAR(time_reg) ORDER BY YEAR(time_reg) DESC";
$rs = mysqli_query($conn, $sql);

?>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

  <!-- Main row -->
  <div class="row">

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<!-- ccccc -->







<div class="box box-solid">
    <div class="box-header ">
        <h4 class="box-area" style="text-align:center">รายงาน รายได้ของโรงแรม</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-hover text-center">
            <tbody>
                <?php
                if(mysqli_num_rows($rs) > 0){
                    while($row = mysqli_fetch_array($rs)){
                        $time_reg = $row['time_reg'];
                ?>
                <tr>
                    <td>

                        <a href="index.php?menu=report-show-month&year=<?=date("Y",strtotime($time_reg))?>" class="btn bg-aqua-active btn-app"> <i class="fa fa-bar-chart"></i>  <?=date("Y",strtotime($time_reg))?> </a>
                        ปี : <?=date("Y",strtotime($time_reg))?>
                    </td>
                </tr>
                <?php
                    }
                }else{
                ?>
                <tr>
                    <td>

                        No data available in table

                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->




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











