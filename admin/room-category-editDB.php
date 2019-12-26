
<section id="main-content">
   <section class="wrapper">
        <?php
            $id = $_POST['id'];
            $name = $_POST['name'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            

            $sql = "UPDATE tb_category_room SET name='$name', detail='$detail', price='$price' WHERE id = '$id'  ";

            $rs = mysqli_query($conn, $sql);

            if ($rs) {
                ?>
                <script>
                    alert('Edit Success...!');
                    window.location = 'index.php?menu=room-show';
                </script>
                <?php
            }else{
                echo $sql;
                ?>
                <script>
                    alert('Edit Fails!!!');
                    //window.location = 'index.php?menu=promotion-addForm';
                </script>
                <?php
            }

        ?>
   </section>
</section>