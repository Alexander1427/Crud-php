<?php
require_once('../models/delete.php');

$delete= new Delete();

 $id_producto=$_POST['id'];


 $delete_prodcutos=$delete->Deleteproductos($id_producto);


 if ($delete_prodcutos) {
    header("location: ../view/index.php");
}










