
<section id="main-content">
   <section class="wrapper">
   <?php
        $file_name = $_FILES['file']['name'];  
        $temp_name = $_FILES['file']['tmp_name']; 

        $file_name = uniqid().$file_name;

        $category_room_id = $_REQUEST['category_room_id'];
        $category_room_name = $_REQUEST['category_room_name'];
        $id = $_REQUEST['id'];
        // $name = $_REQUEST['name'];
        
        $sql = "UPDATE tb_category_room_picture SET picture='$file_name' WHERE id = '$id' ";

        $rs = mysqli_query($conn, $sql);

        //   $id_subject = $conn->insert_id;
        move_uploaded_file($temp_name, '../upload/'.$file_name);

        if ($rs) {
            ?>
            <script>
                alert('Edit Success...!');
                window.location = 'index.php?menu=room-picture-show&id=<?=$category_room_id?>&name=<?=$category_room_name?>';
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

    ?>
   </section>
</section>