<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php
  
    $Product_type = $_GET["Product_type"];
    $Product_idx = $_GET["Product_idx"];

    header('location: index.html'); //페이지 redirect

                       
     $con = mysqli_connect("localhost", "root", "root", "product_list");
     mysqli_set_charset($con, "utf-8");
        
     $sql = "select * from $Product_type where pno=$Product_idx";
     $result = mysqli_query($con, $sql);
     $conn = mysqli_num_rows($result) or die('mysqli_error($con)');
     $row = mysqli_fetch_array($result);



  switch ($Product_type) { //estimate_list 테이블에 업데이트
    case 'product_list_cpu':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'CPU'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_mb':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'M/B'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_ram':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'RAM'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_vga':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'VGA'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_ssd':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'SSD'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_hdd':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'HDD'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_case':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'CASE'";
      $result = mysqli_query($con, $upt);
      break;

    case 'product_list_ps':
      $pname = $row["pname"];
      $cost = $row["cost"];
      $amount =$row["amount"];
      $upt = "UPDATE estimate_list SET pname='상품을 선택해주세요.', cost=0, amount=0 where division = 'P/S'";
      $result = mysqli_query($con, $upt);
      break;

    
    default:
      echo "부품종류를 선택해주세요.";
      break;
  }


  
?>

</body>
</html>