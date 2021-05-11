<?php
require_once('connection.php');
$id_keluhan = $_POST['id_keluhan'];
$keluhan = $_POST['keluhan'];
$tgl_input = $_POST['tgl_input'];

if(!$id_keluhan || !$keluhan || !$tgl_input){
    echo json_encode(array('message'=>'required field is empty.'));
}
else{
    $query = mysqli_query($CON, "UPDATE tb_keluhan SET keluhan='$keluhan', tgl_input='$tgl_input' WHERE id_keluhan = '$id_keluhan'");
    if($query){
        echo json_encode(array('message'=>'Berhasil update'));
  }
  else{
      echo json_encode(array('message'=>'Gagal update'));
    }
}
?>