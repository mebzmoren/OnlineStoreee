<?php
  session_start();
  include 'core/database.php';
  
  if(isset($_POST['submit'])) {
    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    $sql_stmt = "SELECT * FROM seller WHERE email = '$email' AND password = '$password'";
    
    $result = mysqli_query($conn, $sql_stmt);
    
    if(mysqli_num_rows($result) > 0) {
      $array = mysqli_fetch_array($result);
      $_SESSION['seller_name'] = $array['username'];
      $_SESSION['seller_id'] = $array['id'];
      header('location:add-product.php?success=seller-logged');
    } else {
      $error = 'Incorrect user credentials.';
    } 
  }
  
  $title = 'Login';
  $contentView = 'views/_seller-login.php';
  include('views/master.php');
?>







<!-- 
    if(mysqli_num_rows($result) > 0) {
      
      $array = mysqli_fetch_array($result);

      if($array['user_type'] == 'member') {
        $_SESSION['member_name'] = $array['username'];
        header('location:shop.php');
      } elseif ($array['user_type'] == 'seller') {
        $_SESSION['seller_name'] == $array['username'];
        header('location:add-product.php');
      } else {
        $error = 'User type not found.';
      }

    } else {
      $error = 'Incorrect user credentials.';
    } 
  }-->