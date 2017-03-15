<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
include('../admin/phpscripts/connect.php');

$galImg = $_GET["gallery"];
  $sqlCompile = "SELECT * FROM tbl_imgs WHERE img_id='$galImg'";


  $initialRun = mysqli_query($link, $sqlCompile);
echo json_encode(mysqli_fetch_assoc($initialRun));

   ?>
