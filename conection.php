<?php
ob_start();
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
// membuat koneksi ke database 
$Conn = mysqli_connect("localhost","root","","sistemdokumen");
// menambah PTN baru 
if(isset($_POST['addptnobat'])){
     $itemcode = $_POST['itemcode'];
     $itemdescription = $_POST['itemdescription'];
     $batchno = $_POST['batchno'];
     $expireddate = $_POST['expireddate'];
     $noptn = $_POST['noptn'];
     $quantity = $_POST['quantity'];
     $status = $_POST['status']; 
     $addtotable = mysqli_query($Conn, "insert into ptnobat (itemcode, description, batch, expireddate, noptn, qty, status) values
     ('$itemcode','$itemdescription','$batchno','$expireddate','$noptn','$quantity','$status' )");
     if($addtotable){
         header('location:ptnobat.php');
     } else {
         echo 'gagal';
          header('ptnobat.php');
    }
}
// ob_flush()
?>