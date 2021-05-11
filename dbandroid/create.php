<?php
require_once('connection.php');
$id_keluhan = $_POST['id_keluhan'];
$keluhan = $_POST['keluhan'];
$tgl_input = $_POST['tgl_input'];

if(!$id_keluhan || !$keluhan || !$tgl_input){
  echo json_encode(array('message'=>'required field is empty'));
}
else{
    $query = mysqli_query($CON, "INSERT INTO tb_keluhan VALUES ('$id_keluhan','$keluhan','$tgl_input')");
        if($query){
     echo json_encode(array('message'=>'Berhasil menginput'));
    }
     else{
         echo json_encode(array('message'=>'Gagal menginput'));
     }
    }
?>