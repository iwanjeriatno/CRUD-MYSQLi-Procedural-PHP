<?php

include 'ConnectDB.php';

$id = $_GET['id'];

if(isset($id)){
 $sql = "DELETE FROM mahasiswa WHERE id = '$id' ";
 if( mysqli_query($connect, $sql) ){
     header('Location: Read.php');
 }else{
     echo "Delete Data Error!!";
 }
}
?>
