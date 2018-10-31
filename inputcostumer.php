<?php
include('costumer.php');
$custom = new costumer();
//input
$data = ["Description"=>"hallo nadia",
              "Source"=>"tok_amex",
              "Email"=>"nadia@gmail.com"];
    $result = $custom->costumer($data);
    echo "<pre>"; print_r($result);

 ?>
