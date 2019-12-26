<?php
require_once '../connect/connect.php';


$year = $_REQUEST['year'];
$total = 0;
$sql = "SELECT SUM(total_price) AS sum_total_price,time_reg  FROM tb_booking 
        WHERE YEAR(time_reg) = '$year' 
        GROUP BY YEAR(time_reg),MONTH(time_reg),DAY(time_reg) ASC";

$rs = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>รายงานรายได้่ปี: <?=$year?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body >
<div class="wrapper">






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

</section>
<!-- /.content -->










</div>
<!-- ./wrapper -->
</body>
</html>




<script type="text/javascript">
      window.onload = function() { window.print(); }
</script>






























