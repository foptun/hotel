<section class="content">

  <?php
  $sql = "DELETE FROM tb_promotion WHERE id ='" . $_REQUEST['id_promotion'] . "' ";

  $query = $conn->query($sql);
  if ($query) {

        ?>
        <script type="text/javascript">
           window.location = "index.php?menu=promotion-show";
        </script>
        <?php
  }
  ?>

</div>
