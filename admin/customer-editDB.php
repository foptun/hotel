
<section id="main-content">
   <section class="wrapper">
        <?php
                
            $id_customer = $_POST['id_customer'];

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

            $sql = "UPDATE tb_customer SET id_card_number='$id_card_number',firstname='$firstname',lastname='$lastname',address='$address',tel='$tel',car_number='$car_number',date='$date' 
             WHERE id = '$id_customer' ";

            $query = $conn->query($sql);


            if ($query) {
                ?>
                <script>
                    alert('Edit Success...!');
                    window.location = 'index.php?menu=customer-show';
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