<?php
//SELECT SUM(total_price),time_reg AS sum_price FROM tb_booking GROUP BY DAY(time_reg) ORDER BY(time_reg) ASC
$year = $_REQUEST['year'];
$total = 0;
$sql = "SELECT SUM(total_price) AS sum_total_price,time_reg  FROM tb_booking 
        WHERE YEAR(time_reg) = '$year' 
        GROUP BY YEAR(time_reg),MONTH(time_reg),DAY(time_reg) ORDER BY(time_reg) ASC";

$rs = mysqli_query($conn, $sql);

?>
<section class="content-header">
  <!-- <h1>
    จัดการโปรโมชั่น

  </h1> -->
  <a href="index.php?menu=report-show" class="btn bg-navy"> <i class="glyphicon glyphicon-menu-left"></i> Back</a>
  <ol class="breadcrumb">
    <li></li>
  </ol>
</section>

<section class="content">
<!-- Main content -->
<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-bar-chart"></i> รายงานรายได้ประจำปี: <span><?=$year?></span>
        <small class="pull-right">ปี: <?=$year?></small>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      รายงานรายได้ในแต่ละเดือนประจำปี: <?=$year?>
      <br><br>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <!-- TODO -->
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <!-- TODO -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>วันที่</th>
                <th>รายได้ประจำเดือน</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($rs) > 0){
                $index = 1;
                while($row = mysqli_fetch_array($rs)){
                    $time_reg = $row['time_reg'];
                    $sum_price = $row['sum_total_price'];
                    $total += $sum_price;
            ?>
            <tr>
                <td> <?=$index?> </td>
                <td>
                    <?=date("d F Y",strtotime($time_reg))?>
                </td>
                <td>
                    <?=number_format($sum_price)?>
                </td>
            </tr>
            <?php
                    $index++;
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
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-6">
      <!-- <p class="lead">Payment Methods:</p>
      <img src="../../dist/img/credit/visa.png" alt="Visa">
      <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
      <img src="../../dist/img/credit/american-express.png" alt="American Express">
      <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
      </p> -->
    </div>
    <!-- /.col -->
    <div class="col-xs-6">
      <p class="lead">สรุปรายได้</p>

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">รวม:</th>
            <td> <?=number_format($total)?> บาท</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
      </button> -->
      <a href="report-print.php?year=<?=$year?>" target="_blank" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Print PDF
      </a>
    </div>
  </div>
</section>
<!-- /.content -->

</section>








