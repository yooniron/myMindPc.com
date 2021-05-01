<!DOCTYPE html>
<html>
<head>
  <title>  </title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>
<body id="body">
  <div class="order_list clear">
                     <ul>
                        <li><a href="javascript:parent.pageReplace('C.pd_suggest desc,C.pd_sold desc');" class="on">인기상품순</a></li>
                        <li><a href="javascript:parent.pageReplace('pd_date desc');" class="">신상품순</a></li>
                        <li><a href="javascript:parent.pageReplace('C.pd_sobija_price desc');" class="">높은가격순</a></li>
                        <li><a href="javascript:parent.pageReplace('C.pd_sobija_price asc');" class="">낮은가격순</a></li>
                     </ul>
                  </div>
                  
                  <div id="est_products" class="est_products">
                     <ul>
                        <li class="row clear">
                           <div class="thumb">
                              <span class="best"><img src="/skin/shop/basic/images/new/oe/best_1.png"></span>                   <a><img src="/data/pimg/130/130085_60.jpg"></a>
                           </div>
                           <?php
                              $con = mysqli_connect("localhost", "root", "root", "product_list");
                              mysqli_set_charset($con, "utf-8");
                              $sql = "select * from product_list_cpu";
                              $result = mysqli_query($con, $sql);
                              $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                            
                             for($i = 1; $i < $con; $i++) {
                                  mysqli_data_seek($result, $i);   // 가져올 레코드로 위치(포인터) 이동
                                  $row = mysqli_fetch_array($result);
                                  $name = $row["pname"];   //""안에 DB상품 컬럼이름
                                  $spec = $row["description"];   //""안에 상품설명 컬럼이름
                                  $price = $row["cost"];  //알겠지?
                                  }
                                 
                             ?>    

                                <div class="info">
                                    <div class="txt_cont">
                                        <a class="name"><?=$name?></a> <!--id: -->
                                        <p class="spec"><?=$spec?></p>               
                                    </div>
                                    <div class="buy_wrap clear">
                                        <ul class="price">
                                        <li class="card"id="card">판매가 <?=$price?>원</li>   
                                        
                                        </ul>
                                        <button value="<?=$name?>" name="1" class="add_btn" onclick="sub(this)" >담기</button>
                                    </div>
                                </div>    
                        </li>

                        
                                 
                     </ul>
                     <?php
                      mysqli_close($con);
                    ?>
                     
                  </div>
                  <script type="text/javascript" src="./js/letcpu.js"></script>

</body>
</html>