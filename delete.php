<?php
include('costumer.php');
$custom = new costumer();
//contoh panggil delete
$data = ["Id"=>"cus_Dt1GVhPiV6cnfQ"];
    $result = $custom->delete($data);
    echo "<pre>"; print_r($result);
 ?>
