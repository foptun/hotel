
<section id="main-content">
   <section class="wrapper">
        <?php

            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];

            $room_number = $_REQUEST['room_number'];            

            $sql = "INSERT INTO tb_room(category_room_id, room_number) VALUES('$id', '$room_number') ";

            $rs = mysqli_query($conn, $sql);

            if ($rs) {
                ?>
                <script>
                    alert('Insert Success...!');
                    window.location = 'index.php?menu=room-room-show&id=<?=$id?>&name=<?=$name?>';
                </script>
                <?php
            }else{
                echo $sql;
                ?>
                <script>
                    alert('Insert Fails!!!');
                    window.history.back();
                </script>
                <?php
            }

        ?>
   </section>
</section>