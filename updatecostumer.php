<?php
include('costumer.php');
$custom = new costumer();
//contoh panggil yang edit
$data = ["Id"=>"cus_Dt1GVhPiV6cnfQ",
              "description"=>"belanja barang",
              "email"=>"mak20997@gmail.com"];
    $result = $custom->update_costumer($data);
    echo "<pre>"; print_r($result);

 ?>
