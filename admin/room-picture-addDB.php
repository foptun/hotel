
<section id="main-content">
   <section class="wrapper">
   <?php
        $file_name = $_FILES['file']['name'];  
        $temp_name = $_FILES['file']['tmp_name']; 

        $file_name = uniqid().$file_name;

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        
        $sql = "INSERT INTO tb_category_room_picture(category_room_id, picture) VALUES('$id','$file_name') ";

        $rs = mysqli_query($conn, $sql);

        //   $id_subject = $conn->insert_id;
        move_uploaded_file($temp_name, '../upload/'.$file_name);

        if ($rs) {
            ?>
            <script>
                alert('Insert Success...!');
                window.location = 'index.php?menu=room-picture-show&id=<?=$id?>&name=<?=$name?>';
            </script>
            <?php
        }else{
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