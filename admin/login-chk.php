<?php
session_start();
//error_reporting(0);
require_once '../connect/connect.php';
require_once '../model/AdminModel.php';

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

 $username = $conn->real_escape_string($username);
 $password = $conn->real_escape_string($password);

$sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password' ";


$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
   $adminModel = new AdminModel();
   $adminModel->id = $row['id'];
   $adminModel->name = $row['name'];
   $adminModel->username = $row['username'];
   $adminModel->password = $row['password'];
   $adminModel->firstname = $row['firstname'];
   $adminModel->lastname = $row['lastname'];
   $adminModel->email = $row['email'];
   $adminModel->tel = $row['tel'];

   $_SESSION['LOGIN_ADMIN'] = serialize($adminModel);


      ?>
      <script type="text/javascript">
         window.location = "index.php";
      </script>
      <?php

} else {
   ?>
   <script type="text/javascript">
      alert("Login Fails!!!");
      history.back();
   </script>
   <?php

}
?>
