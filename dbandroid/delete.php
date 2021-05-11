<?php
require_once('connection.php');
$id_keluhan = $_GET['id_keluhan'];
if(!$id_keluhan){
    echo json_encode(array('message'=>'required field is empty'));
}
else{
    $query = mysqli_query($CON, "DELETE FROM tb_keluhan WHERE id_keluhan='$id_keluhan'");
    if($query){
        echo json_encode(array('message'=>'Berhasil menghapus'));
    }
    else{
        echo json_encode(array('message'=>'Gagal menghapus'));
    }
}
?>