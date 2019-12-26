
<section id="main-content">
   <section class="wrapper">
        <?php
            $temp_name = $_FILES['file']['tmp_name']; 

            $name = $_POST['name'];
            $name = $conn->real_escape_string($name);
            

            $sql = "INSERT INTO tb_promotion(picture, promotion_name) VALUES('".addslashes(file_get_contents($temp_name))."', '$name') ";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('Insert Success...!');
                    window.location = 'index.php?menu=promotion-show';
                </script>
                <?php
            }else{
                //echo $sql;
                ?>
                <script>
                    alert('Insert Fails!!!');
                    //window.location = 'index.php?menu=promotion-addForm';
                </script>
                <?php
            }

        ?>
   </section>
</section>