<?php
  session_start();
  include 'core/database.php';
  $title = 'Seller Profile';
  $contentView = 'views/_seller-profile.php';
  include('views/master.php');
?>