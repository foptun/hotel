<section class="content">

  <?php
  $sql = "DELETE FROM tb_customer WHERE id ='" . $_REQUEST['id_customer'] . "' ";

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
           window.location = "index.php?menu=customer-show";
        </script>
        <?php
  }
  ?>

</div>
