<?php
$siteName = "stock-inventory";
require_once($_SERVER["DOCUMENT_ROOT"]."/".$siteName."/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  $variable = select_all_reverse('brands');

  // var_dump($variable);

  $count = row_count('brands');

  foreach ($variable as $row) {
    $json[] = [
      "id"            => $row["id"],
      "brandName"     => $row["brandName"],
      "status"     => $row["brand_token"]
    ];
  }

  $data['data'] = $json;




// $result =  mysqli_query($mysqli,$sqlTotal);


$data['count'] = $count;


echo json_encode($data);




?>