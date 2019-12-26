
<section id="main-content">
   <section class="wrapper">
        <?php
            $id_card_number = $_POST['id_card_number'];
            $id_card_number = $conn->real_escape_string($id_card_number);
            
            $firstname = $_POST['firstname'];
            $firstname = $conn->real_escape_string($firstname);

            $lastname = $_POST['lastname'];
            $lastname = $conn->real_escape_string($lastname);
            
            $address = $_POST['address'];
            $address = $conn->real_escape_string($address);

            $tel = $_POST['tel'];
            $tel = $conn->real_escape_string($tel);

            $car_number = $_POST['car_number'];
            $car_number = $conn->real_escape_string($car_number);

            $date = $_POST['date'];
            $date = $conn->real_escape_string($date);

            $sql = "INSERT INTO tb_customer(id_card_number, firstname, lastname, address, tel, car_number, date) 
            VALUES ('$id_card_number', '$firstname', '$lastname', '$address', '$tel', '$car_number', '$date')";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('Insert Success...!');
                    window.location = 'index.php?menu=customer-show';
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