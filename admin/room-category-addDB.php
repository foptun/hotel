
<section id="main-content">
   <section class="wrapper">
        <?php
        
            $name = $_POST['name'];
            $detail = $_POST['detail'];
            $price = $_POST['price'];
            

            $sql = "INSERT INTO tb_category_room(name, detail, price) VALUES('$name', '$detail', '$price') ";

            $rs = mysqli_query($conn, $sql);

            if ($rs) {
                ?>
                <script>
                    alert('Insert Success...!');
                    window.location = 'index.php?menu=room-show';
                </script>
                <?php
            }else{
                echo $sql;
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