
<section id="main-content">
   <section class="wrapper">
   <?php
   

        $category_room_id = $_REQUEST['category_room_id'];
        $category_room_name = $_REQUEST['category_room_name'];

        $id = $_REQUEST['id'];

        
        $sql = "DELETE FROM tb_category_room_picture WHERE id = '$id' ";

        $rs = mysqli_query($conn, $sql);

        //   $id_subject = $conn->insert_id;


        if ($rs) {
            ?>
            <script>
                alert('Delete Success...!');
                window.location = 'index.php?menu=room-picture-show&id=<?=$category_room_id?>&name=<?=$category_room_name?>';
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Delete Fails!!!');
                window.history.back();
            </script>
            <?php
        }

    ?>
   </section>
</section>