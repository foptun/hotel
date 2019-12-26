
<section id="main-content">
   <section class="wrapper">
        <?php
            if($_FILES['file']['tmp_name'] != ""){ 
                $temp_name = $_FILES['file']['tmp_name']; 

                $name = $_POST['name'];

                $id_promotion = $_POST['id_promotion'];

                $sql = "UPDATE tb_promotion SET picture='".addslashes(file_get_contents($temp_name))."', promotion_name='$name' WHERE id = '$id_promotion' ";
                
                $query = $conn->query($sql);

                //   $id_subject = $conn->insert_id;


                if ($query) {
                    ?>
                    <script>
                        alert('Edit Success...!');
                        window.location = 'index.php?menu=promotion-show';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
            }else{
                $name = $_POST['name'];
                $id_promotion = $_POST['id_promotion'];

                $sql = "UPDATE tb_promotion SET promotion_name='$name' WHERE id = '$id_promotion' ";

                $query = $conn->query($sql);


                if ($query) {
                    ?>
                    <script>
                        alert('Edit Success...!');
                        window.location = 'index.php?menu=promotion-show';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert('Edit Fails!!!');
                        window.history.back();
                    </script>
                    <?php
                }
            }
        ?>
   </section>
</section>