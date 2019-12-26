<?php
//SELECT SUM(total_price),time_reg AS sum_price FROM tb_booking GROUP BY DAY(time_reg) ORDER BY(time_reg) ASC
$year = $_REQUEST['year'];

$sql = "SELECT SUM(total_price) AS sum_total_price,time_reg  FROM tb_booking 
        WHERE YEAR(time_reg) = '2018' 
        GROUP BY DAY(time_reg) ORDER BY(time_reg) ASC";

$rs = mysqli_query($conn, $sql);

?>
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
      From
      <address>
        <strong>Admin, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        Phone: (804) 123-5432<br>
        Email: info@almasaeedstudio.com
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <!-- To
      <address>
        <strong>John Doe</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        Phone: (555) 539-1037<br>
        Email: john.doe@example.com
      </address> -->
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <!-- <b>Invoice #007612</b><br>
      <br>
      <b>Order ID:</b> 4F3S8J<br>
      <b>Payment Due:</b> 2/22/2014<br>
      <b>Account:</b> 968-34567 -->
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
                <th>รายได้</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(mysqli_num_rows($rs) > 0){
                $index = 1;
                while($row = mysqli_fetch_array($rs)){
                    $time_reg = $row['time_reg'];
                    $sum_price = $row['sum_total_price'];
            ?>
            <tr>
                <td> <?=$index?> </td>
                <td>
                    <?=date("d-M-Y",strtotime($time_reg))?>
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
      <p class="lead">Payment Methods:</p>
      <img src="../../dist/img/credit/visa.png" alt="Visa">
      <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
      <img src="../../dist/img/credit/american-express.png" alt="American Express">
      <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
      </p>
    </div>
    <!-- /.col -->
    <div class="col-xs-6">
      <p class="lead">Amount Due 2/22/2014</p>

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Subtotal:</th>
            <td>$250.30</td>
          </tr>
          <tr>
            <th>Tax (9.3%)</th>
            <td>$10.34</td>
          </tr>
          <tr>
            <th>Shipping:</th>
            <td>$5.80</td>
          </tr>
          <tr>
            <th>Total:</th>
            <td>$265.24</td>
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
      <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
      <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
      </button>
      <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generate PDF
      </button>
    </div>
  </div>
</section>
<!-- /.content -->

</section>








