
<section id="main-content">
   <section class="wrapper">
        <?php

            $category_room_id = $_REQUEST['category_room_id'];
            $category_room_name = $_REQUEST['category_room_name'];

            $id = $_REQUEST['id'];

            $room_number = $_REQUEST['room_number'];            

            $sql = "UPDATE tb_room SET room_number='$room_number' WHERE id = '$id' ";

            $rs = mysqli_query($conn, $sql);

            if ($rs) {
                ?>
                <script>
                    alert('Edit Success...!');
                    window.location = 'index.php?menu=room-room-show&id=<?=$category_room_id?>&name=<?=$category_room_name?>'; 
                </script>
                <?php
            }else{
                echo $sql;
                ?>
                <script>
                    alert('Edit Fails!!!');
                    window.history.back();
                </script>
                <?php
            }

        ?>
   </section>
</section>