<?php
  include("base_tnx.php");
  define('DB','upfrontx_crow'); 

  $instance = new SQL_ops(DB);
  
  if (isset($_POST['track'])) {
    $track = $_POST['orderno'];    

    if ($track!= "") {
      $table ="crow";
      $cols ="TrackcrtFo";
      $where ="Where TrackcrtFo ='$track'";
      $log = $instance->select($table,$cols,$where);   
      if($log){
          $_SESSION['traq']=$track;
         // echo "Login Successfull";
          header ('location:../trackkey.php');
      }else echo "Incorrect Tracking Code";          
    } else echo"Enter a description of your shipment";
  }
  
  
  
?>
<!-- CREATE TABLE crow(sn int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, TrackcrtFo varchar(50), shipmentDesc varchar(50), 
shipFrmWh varchar(50), latLocal varchar(50), currEvet varchar(50), SHiptow varchar(50), dateLeftPort varchar(50), latestEvntdate varchar(50), HvUCollet varchar(50));
 -->