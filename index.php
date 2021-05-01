<?php
  if(isset($_GET["hid"])) $hid = $_GET["hid"];
  else 
    $hid ='product_list_cpu'


  ?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
   <title>:: 내 마음대로 PC견적 ::</title>
</head>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/common.css">


<body id="body">
   <h1>내 마음대로 PC견적 사이트</h1>
<form id="update_form" name="update_form" method="get" action="" onsubmit="">
     <input type="hidden" id="Product_type" name="Product_type" value="<?=$hid?>">
     <input type="hidden" id="Product_idx" name="Product_idx" value="">
   </form>
   <hr>
   <table width="1160" cellpadding="0"   cellspacing="0"
   border="0" align="center"   style="border-top:2px solid #2b2f3a;border-bottom: 1px solid #d9d9d9; border-right:1px solid#d9d9d9; border-left: 1px solid #d9d9d9;">
   
      <tbody><tr height="800" valign="top">
         <!--왼쪽 테이블-->
         <td width="600">
            <div class="est_search_wrap">
    <form name="estimate_list" method="get" action="./index.php" autocomplete="off">
   <!-- <form name="search_list" method="post" action="estimate_search_new2.php" target="search_list">
   -->
      <input type="hidden" name="hid" id="hid" value="">
      <!-- <input type="hidden" id="chkk[]" name="chkk[]" value='' /> -->
       <div class="head">
          <span class="part_tit">CPU</span>
          <div class="form">
             <input type="text" class="input" id="search" name="search" value="" onkeypress="if(event.keyCode==13){ goSearch(); }">
             <a href="#" class="btn" onclick="goSearch();">검색</a>
          </div>
       </div>
       <div class="search_select clear">
                  <div class="select_box">
            <input type="hidden" name="chkk[브랜드 분류]" value="">
             <a class="selected" href="#" id="chkk[브랜드 분류]">브랜드 분류</a>
             <div class="item_layer">
                <ul>
                   <li class="item">브랜드 분류</li>
                                      <!-- <li class="item" value="AMD" >AMD</li> -->
                   <li class="item ">AMD</li>
                                     <!-- <li class="item" value="AMD(Zen3 버미어)" >AMD(Zen3 버미어)</li> -->
                   <li class="item ">AMD(Zen3 버미어)</li>
                                     <!-- <li class="item" value="AMD(Zen3 베르메르)" >AMD(Zen3 베르메르)</li> -->
                   <li class="item ">AMD(Zen3 베르메르)</li>
                                     <!-- <li class="item" value="AMD(라이젠 5)" >AMD(라이젠 5)</li> -->
                   <li class="item ">AMD(라이젠 5)</li>
                                     <!-- <li class="item" value="AMD(라이젠 7)" >AMD(라이젠 7)</li> -->
                   <li class="item ">AMD(라이젠 7)</li>
                                     <!-- <li class="item" value="AMD(라이젠 9)" >AMD(라이젠 9)</li> -->
                   <li class="item ">AMD(라이젠 9)</li>
                                     <!-- <li class="item" value="AMD(라이젠 스레드리퍼)" >AMD(라이젠 스레드리퍼)</li> -->
                   <li class="item ">AMD(라이젠 스레드리퍼)</li>
                                     <!-- <li class="item" value="AMD(라이젠3)" >AMD(라이젠3)</li> -->
                   <li class="item ">AMD(라이젠3)</li>
                                     <!-- <li class="item" value="애슬론(레이븐 릿지)" >애슬론(레이븐 릿지)</li> -->
                   <li class="item ">애슬론(레이븐 릿지)</li>
                                     <!-- <li class="item" value="인텔" >인텔</li> -->
                   <li class="item ">인텔</li>
                                     <!-- <li class="item" value="인텔(셀러론 콘로)" >인텔(셀러론 콘로)</li> -->
                   <li class="item ">인텔(셀러론 콘로)</li>
                                     <!-- <li class="item" value="인텔(셀러론)" >인텔(셀러론)</li> -->
                   <li class="item ">인텔(셀러론)</li>
                                     <!-- <li class="item" value="인텔(제온)" >인텔(제온)</li> -->
                   <li class="item ">인텔(제온)</li>
                                     <!-- <li class="item" value="인텔(코어i3-2세대)" >인텔(코어i3-2세대)</li> -->
                   <li class="item ">인텔(코어i3-2세대)</li>
                                     <!-- <li class="item" value="인텔(코어i3-3세대)" >인텔(코어i3-3세대)</li> -->
                   <li class="item ">인텔(코어i3-3세대)</li>
                                     <!-- <li class="item" value="인텔(코어i3-4세대)" >인텔(코어i3-4세대)</li> -->
                   <li class="item ">인텔(코어i3-4세대)</li>
                                     <!-- <li class="item" value="인텔(코어i3-6세대)" >인텔(코어i3-6세대)</li> -->
                   <li class="item ">인텔(코어i3-6세대)</li>
                                     <!-- <li class="item" value="인텔(코어i3-8세대)" >인텔(코어i3-8세대)</li> -->
                   <li class="item ">인텔(코어i3-8세대)</li>
                                     <!-- <li class="item" value="인텔(코어i3-9세대)" >인텔(코어i3-9세대)</li> -->
                   <li class="item ">인텔(코어i3-9세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-2세대)" >인텔(코어i5-2세대)</li> -->
                   <li class="item ">인텔(코어i5-2세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-4세대)" >인텔(코어i5-4세대)</li> -->
                   <li class="item ">인텔(코어i5-4세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-6세대)" >인텔(코어i5-6세대)</li> -->
                   <li class="item ">인텔(코어i5-6세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-7세대)" >인텔(코어i5-7세대)</li> -->
                   <li class="item ">인텔(코어i5-7세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-8세대)" >인텔(코어i5-8세대)</li> -->
                   <li class="item ">인텔(코어i5-8세대)</li>
                                     <!-- <li class="item" value="인텔(코어i5-9세대)" >인텔(코어i5-9세대)</li> -->
                   <li class="item ">인텔(코어i5-9세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-2세대)" >인텔(코어i7-2세대)</li> -->
                   <li class="item ">인텔(코어i7-2세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-3세대)" >인텔(코어i7-3세대)</li> -->
                   <li class="item ">인텔(코어i7-3세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-4세대)" >인텔(코어i7-4세대)</li> -->
                   <li class="item ">인텔(코어i7-4세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-6세대)" >인텔(코어i7-6세대)</li> -->
                   <li class="item ">인텔(코어i7-6세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-7세대)" >인텔(코어i7-7세대)</li> -->
                   <li class="item ">인텔(코어i7-7세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-8세대)" >인텔(코어i7-8세대)</li> -->
                   <li class="item ">인텔(코어i7-8세대)</li>
                                     <!-- <li class="item" value="인텔(코어i7-9세대)" >인텔(코어i7-9세대)</li> -->
                   <li class="item ">인텔(코어i7-9세대)</li>
                                     <!-- <li class="item" value="인텔(코어i9-9세대)" >인텔(코어i9-9세대)</li> -->
                   <li class="item ">인텔(코어i9-9세대)</li>
                                     <!-- <li class="item" value="인텔(코어X-시리즈)" >인텔(코어X-시리즈)</li> -->
                   <li class="item ">인텔(코어X-시리즈)</li>
                                     <!-- <li class="item" value="인텔(펜티엄)" >인텔(펜티엄)</li> -->
                   <li class="item ">인텔(펜티엄)</li>
                                     <!-- <li class="item" value="코어i9-10세대" >코어i9-10세대</li> -->
                   <li class="item ">코어i9-10세대</li>
                                  </ul>
             </div><!-- item_layer -->
          </div>
                  <div class="select_box">
            <input type="hidden" name="chkk[소켓 구분]" value="">
             <a class="selected" href="#" id="chkk[소켓 구분]">소켓 구분</a>
             <div class="item_layer">
                <ul>
                   <li class="item">소켓 구분</li>
                                      <!-- <li class="item" value="AMD(소켓AM4)" >AMD(소켓AM4)</li> -->
                   <li class="item ">AMD(소켓AM4)</li>
                                     <!-- <li class="item" value="AMD(소켓sTRX4)" >AMD(소켓sTRX4)</li> -->
                   <li class="item ">AMD(소켓sTRX4)</li>
                                     <!-- <li class="item" value="AMD(소켓TR4)" >AMD(소켓TR4)</li> -->
                   <li class="item ">AMD(소켓TR4)</li>
                                     <!-- <li class="item" value="LGA 1155" >LGA 1155</li> -->
                   <li class="item ">LGA 1155</li>
                                     <!-- <li class="item" value="인텔(소켓1150)" >인텔(소켓1150)</li> -->
                   <li class="item ">인텔(소켓1150)</li>
                                     <!-- <li class="item" value="인텔(소켓1151)" >인텔(소켓1151)</li> -->
                   <li class="item ">인텔(소켓1151)</li>
                                     <!-- <li class="item" value="인텔(소켓1151v2)" >인텔(소켓1151v2)</li> -->
                   <li class="item ">인텔(소켓1151v2)</li>
                                     <!-- <li class="item" value="인텔(소켓1155)" >인텔(소켓1155)</li> -->
                   <li class="item ">인텔(소켓1155)</li>
                                     <!-- <li class="item" value="인텔(소켓1200)" >인텔(소켓1200)</li> -->
                   <li class="item ">인텔(소켓1200)</li>
                                     <!-- <li class="item" value="인텔(소켓2011)" >인텔(소켓2011)</li> -->
                   <li class="item ">인텔(소켓2011)</li>
                                     <!-- <li class="item" value="인텔(소켓2011-V3)" >인텔(소켓2011-V3)</li> -->
                   <li class="item ">인텔(소켓2011-V3)</li>
                                     <!-- <li class="item" value="인텔(소켓2066)" >인텔(소켓2066)</li> -->
                   <li class="item ">인텔(소켓2066)</li>
                                     <!-- <li class="item" value="인텔(소켓3647)" >인텔(소켓3647)</li> -->
                   <li class="item ">인텔(소켓3647)</li>
                                     <!-- <li class="item" value="인텔(소켓775)" >인텔(소켓775)</li> -->
                   <li class="item ">인텔(소켓775)</li>
                                  </ul>
             </div><!-- item_layer -->
          </div>
                  <div class="select_box">
            <input type="hidden" name="chkk[코어 형태]" value="">
             <a class="selected" href="#" id="chkk[코어 형태]">코어 형태</a>
             <div class="item_layer">
                <ul>
                   <li class="item">코어 형태</li>
                                      <!-- <li class="item" value="10코어" >10코어</li> -->
                   <li class="item ">10코어</li>
                                     <!-- <li class="item" value="12코어" >12코어</li> -->
                   <li class="item ">12코어</li>
                                     <!-- <li class="item" value="14코어" >14코어</li> -->
                   <li class="item ">14코어</li>
                                     <!-- <li class="item" value="16코어" >16코어</li> -->
                   <li class="item ">16코어</li>
                                     <!-- <li class="item" value="18코어" >18코어</li> -->
                   <li class="item ">18코어</li>
                                     <!-- <li class="item" value="20코어" >20코어</li> -->
                   <li class="item ">20코어</li>
                                     <!-- <li class="item" value="22코어" >22코어</li> -->
                   <li class="item ">22코어</li>
                                     <!-- <li class="item" value="24코어" >24코어</li> -->
                   <li class="item ">24코어</li>
                                     <!-- <li class="item" value="32코어" >32코어</li> -->
                   <li class="item ">32코어</li>
                                     <!-- <li class="item" value="64코어" >64코어</li> -->
                   <li class="item ">64코어</li>
                                     <!-- <li class="item" value="데카(10) 코어" >데카(10) 코어</li> -->
                   <li class="item ">데카(10) 코어</li>
                                     <!-- <li class="item" value="도데카(12) 코어" >도데카(12) 코어</li> -->
                   <li class="item ">도데카(12) 코어</li>
                                     <!-- <li class="item" value="도테카(12) 코어" >도테카(12) 코어</li> -->
                   <li class="item ">도테카(12) 코어</li>
                                     <!-- <li class="item" value="듀얼 코어" >듀얼 코어</li> -->
                   <li class="item ">듀얼 코어</li>
                                     <!-- <li class="item" value="듀얼(2)코어" >듀얼(2)코어</li> -->
                   <li class="item ">듀얼(2)코어</li>
                                     <!-- <li class="item" value="옥타(8) 코어" >옥타(8) 코어</li> -->
                   <li class="item ">옥타(8) 코어</li>
                                     <!-- <li class="item" value="옥타(8)코어" >옥타(8)코어</li> -->
                   <li class="item ">옥타(8)코어</li>
                                     <!-- <li class="item" value="쿼드 코어" >쿼드 코어</li> -->
                   <li class="item ">쿼드 코어</li>
                                     <!-- <li class="item" value="쿼드(4)코어" >쿼드(4)코어</li> -->
                   <li class="item ">쿼드(4)코어</li>
                                     <!-- <li class="item" value="테트라데카(14) 코어" >테트라데카(14) 코어</li> -->
                   <li class="item ">테트라데카(14) 코어</li>
                                     <!-- <li class="item" value="헥사 코어" >헥사 코어</li> -->
                   <li class="item ">헥사 코어</li>
                                     <!-- <li class="item" value="헥사(6) 코어" >헥사(6) 코어</li> -->
                   <li class="item ">헥사(6) 코어</li>
                                     <!-- <li class="item" value="헥사(6)코어" >헥사(6)코어</li> -->
                   <li class="item ">헥사(6)코어</li>
                                     <!-- <li class="item" value="헥사데카(16) 코어" >헥사데카(16) 코어</li> -->
                   <li class="item ">헥사데카(16) 코어</li>
                                  </ul>
             </div><!-- item_layer -->
          </div>
                  <div class="select_box">
            <input type="hidden" name="chkk[패키지 형태]" value="">
             <a class="selected" href="#" id="chkk[패키지 형태]">패키지 형태</a>
             <div class="item_layer">
                <ul>
                   <li class="item">패키지 형태</li>
                                      <!-- <li class="item" value="대리점" >대리점</li> -->
                   <li class="item ">대리점</li>
                                     <!-- <li class="item" value="대리점 정품박스" >대리점 정품박스</li> -->
                   <li class="item ">대리점 정품박스</li>
                                     <!-- <li class="item" value="멀티팩" >멀티팩</li> -->
                   <li class="item ">멀티팩</li>
                                     <!-- <li class="item" value="벌크" >벌크</li> -->
                   <li class="item ">벌크</li>
                                     <!-- <li class="item" value="벌크 + 쿨러" >벌크 + 쿨러</li> -->
                   <li class="item ">벌크 + 쿨러</li>
                                     <!-- <li class="item" value="병행수입 박스" >병행수입 박스</li> -->
                   <li class="item ">병행수입 박스</li>
                                     <!-- <li class="item" value="정품" >정품</li> -->
                   <li class="item ">정품</li>
                                     <!-- <li class="item" value="정품 박스" >정품 박스</li> -->
                   <li class="item ">정품 박스</li>
                                  </ul>
             </div><!-- item_layer -->
          </div>
                </div>
       
   
      <input type="hidden" name="depth" value="2">
      <input type="hidden" name="cate1" value="4">
      <input type="hidden" name="cate2" value="13">
      <input type="hidden" name="cate3" value="">
      <input type="hidden" name="cate4" value="">
      <input type="hidden" name="page" value="1">
      <input type="hidden" name="list_order" value="C.pd_suggest desc,C.pd_sold desc">
      <input type="hidden" name="se_type" value="">
      <input type="hidden" name="list_num" value="15">
      <input type="hidden" name="view_no" value="Y">
 
   
</div>
   
      

   <div width="100%">
<div id="" name="" frameborder="0" style=" overflow:visible;overflow-y:scroll;overflow-x:hidden;height:800px; width: 100%"scrolling="no">

<div class="est_products_wrap">

    

<div class="order_list clear">
    <ul>
    <li><a href="" class="on">인기상품순</a></li>
    <li><a href="javascript:parent.pageReplace('pd_date desc');" class="">신상품순</a></li>
    <li><button onclick="<?= $sql=$desc ?>">높은가격순</button></li>
    <li><a href="javascript:parent.pageReplace('C.pd_sobija_price asc');" class="">낮은가격순</a></li>
    </ul>
</div>

<div id="est_products" class="est_products">
    <ul>
    

<?php
            $con = mysqli_connect("localhost", "root", "root", "product_list");
            mysqli_set_charset($con, "utf-8");
            $sql = "select * from $hid";
            $desc = "select * from $hid order by cost desc";
            $result = mysqli_query($con, $sql);
            $conn = mysqli_num_rows($result) or die('mysqli_error($con)');
            
            for($i = 0; $i < $conn; $i++) {
                mysqli_data_seek($result, $i);   
                $row = mysqli_fetch_array($result);
                $name = $row["pname"];   
                $spec = $row["description"];   
                $price = $row["cost"];  
                $pimg = $row["pimg"];
                $pno = $row["pno"];
                
                
            ?>   
            <li class="row clear">
        <div class="thumb">
            <span class="best"><img src="<?=$pimg?>"></span>
        </div>
        

            <div class="info">
                <div class="txt_cont">
                    <a class="name"><?=$name?></a> <!--id: -->
                    <p class="spec"><?=$spec?></p>               
                </div>
                <div class="buy_wrap clear">
                    <ul class="price">
                    <li class="card"id="card">판매가 <?=$price?>원</li>   
                    
                    </ul>

                     

                    
                    <button type="button" data-idx="<?=$pno?>" value="" id="<?=$hid?>" name="<?= $i+1 ?>" class="add_btn" onclick="submit_list(this)" >담기</button>
                </div>
            </div>    
    </li>

    
                
 
    <?php  }
   
    ?>

</ul>
    
</div>
                     
                     
                  </div>
                  
                  <div class="paginate"> <font color="blue" style="font-family:tahoma;font-weight:bold;">1</font> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(2)" style="font-family:tahoma;font-weight:bold;">2</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(3)" style="font-family:tahoma;font-weight:bold;">3</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(4)" style="font-family:tahoma;font-weight:bold;">4</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(5)" style="font-family:tahoma;font-weight:bold;">5</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(6)" style="font-family:tahoma;font-weight:bold;">6</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(7)" style="font-family:tahoma;font-weight:bold;">7</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(8)" style="font-family:tahoma;font-weight:bold;">8</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(9)" style="font-family:tahoma;font-weight:bold;">9</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle">  <a href="javascript:parent.pageMove(10)" style="font-family:tahoma;font-weight:bold;">10</a> <img src="img/btnarr_03.jpg" border="0" align="absmiddle"> <a href="javascript:parent.pageMove(11)"><img src="img/btnarr_05.jpg" border="0" align="absmiddle"></a> <a href="javascript:parent.pageMove(16)" style="font-family:tahoma;font-weight:bold;"><img src="img/btnarr_04.jpg" border="0" align="absmiddle"></a> </div>
               
                  <input type="hidden" name="depth" value="2">
                  <input type="hidden" name="cate1" value="4">
                  <input type="hidden" name="cate2" value="13">
                  <input type="hidden" name="cate3" value="">
                  <input type="hidden" name="cate4" value="">
                  <input type="hidden" name="page" value="1">
                  <input type="hidden" name="chkk" value="">
                  <input type="hidden" name="list_order" value="C.pd_suggest desc,C.pd_sold desc">
                  <input type="hidden" name="view_no" value="Y">
                 
            </div>
      </div>
   </div>
         </td>
         
         
         <!--오른쪽 테이블-->

         <td width="578">
            <table style="width:580px;" cellpadding="0" cellspacing="0" border="0">
            <tbody>
               <tr hieght="800" valign="top">
                  <td>
                    
                        <input type="hidden" name="" value="multi">
                        <input type="hidden" name="" value="">
                        <div style="width:580px">
                           <div id="" style="">
                              <img src="" style="display:block;">
                           </div>

                        <table width="580" cellpadding="0" cellspacing="0" border="0" style="border-top:1px solid #d9d9d9; border-bottom:1px solid #d9d9d9; color:#636363;">
                           <tbody>
                              <tr height="37" class="bold gulim font 12" align="center">
                                 <td width="102">
                                    품목
                                 </td>
                                 
                                 <td width="229">
                                    상품명
                                 </td>

                                 <td width="63">
                                    수량
                                 </td>

                                 <td width="71">
                                    가격
                                 </td>

                                 <td width="61">
                                    합계
                                 </td>

                                 <td width="41">
                                    삭제
                                 </td>

                                 <td width="8">
                                 </td>
                              </tr>
                              
                           </tbody>
                           
                        </table>

                        <div style="height:500px; overflow-y: scroll;">
                              <div id="" style="width:100%; min-height:39px; border-bottom:1px solid #d9d9d9;" class="">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#c1c4cc;" class="gulim">
                                 <tbody>
                                    <tr height="39">
                                       <td width="17" class="center">
                                          <a href=""></a>
                                       </td>
                                       <td width="546" class="bold left gulim font12" style="">
                                          <a href="" class="gulim font12 white">
                                             <span id="">
                                                컴퓨터 부품&nbsp;<img id="" src="" style="vertical-align:middle;">
                                             </span>
                                          </a>
                                       </td>
                                       
                                    </tr>
                                 </tbody>
                              </table>
                              </div>
                              <table id="" width="560" cellpadding="0" cellspacing="0" border="0" style="display:block;" class="gulim select_list_subtitle_table">
                              <!--삽입될 내용-->
                                      
                                 <tbody>
                                    <tr class="gulim font12" height="45">
                                      
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                           
                                          <button onclick="change_v(this)" id="product_list_cpu">CPU</button>
                                          
                                       </td>
                                       <?php
                                        
                                         
                                          $sql = "select * from estimate_list where pno=1";
                                          $result = mysqli_query($con, $sql);
                                          $conn = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $conn);   
                                          $row = mysqli_fetch_array($result);
                                          $c_name = $row["pname"];
                                          $amount =$row["amount"];
                                          $price = $row["cost"];  
                                          $tot1 = $price * $amount;
                                         
                                      ?> 
                                       <td id="" width="457">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45">
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim" id="cpuZ">
                                                         <?= $c_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;text-align: center;" id="demend">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                      
                                                   </td>
                                                   <td width="61" style=" border-left:1px solid   #d9d9d9;" >
                                                      <br>
                                                      <p id="priceZ"></p>
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>
                                                                                                            
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot1 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9; text-align: center;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_cpu" name="<?= $i+1 ?>" onclick="remove_list(this)" >삭제</button>
                                                      
                                                   </td>
                                                </tr>


                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;">
                                        <button onclick="change_v(this)" id="product_list_mb">메인보드</button>
                                        
                                    </td>
                                    <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=2";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $mb_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot2 = $price * $amount;
                                         
                                      ?> 
                                       <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">  
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $mb_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot2 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_mb" name="" onclick="remove_list(this)" >삭제</button>
                                                     
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                          <button onclick="change_v(this)" id="product_list_ram">RAM</button>
                                          <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=3";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $ram_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot3 = $price * $amount;
                                         
                                      ?> 
                                       </td>
                                        <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $ram_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot3 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_ram" name="" onclick="remove_list(this)" >삭제</button>
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                         <button onclick="change_v(this)" id="product_list_vga">VGA<br>그래픽카드</button>
                                           <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=4";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $vga_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot4 = $price * $amount;
                                         
                                      ?>
                                       </td>
                                      <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $vga_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot4 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_vga" name="" onclick="remove_list(this)" >삭제</button>
                                                      
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                         <button onclick="change_v(this)" id="product_list_ssd">SSD</button>
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=5";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $ssd_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot5 = $price * $amount;
                                         
                                      ?>
                                       </td>
                                      <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $ssd_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot5 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                      <button type="button" data-idx="<?=$pno?>" value="" id="product_list_ssd" name="" onclick="remove_list(this)" >삭제</button>
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                         <button onclick="change_v(this)" id="product_list_hdd">HDD</button>
                                         <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=6";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $hdd_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot6 = $price * $amount;
                                         
                                      ?>
                                       </td>
                                      <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $hdd_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot6 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_hdd" name="" onclick="remove_list(this)" >삭제</button>
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                          <button onclick="change_v(this)" id="product_list_case">CASE</button>
                                          <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=7";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $case_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot7 = $price * $amount;
                                         
                                      ?>
                                       </td>
                                      <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $case_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot7 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_case" name="" onclick="remove_list(this)" >삭제</button>
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>

                                    <tr class="gulim font12" height="45">
                                       <td width="102" id="" align="center" class="gulim bold" style="background-color:#303030; color:#ffffff;" onclick="op3_func('2010');">
                                          <button onclick="change_v(this)" id="product_list_ps">파워</button>
                                          <?php
                                        $con = mysqli_connect("localhost", "root", "root", "product_list");
                                          mysqli_set_charset($con, "utf-8");
                                          $sql = "select * from estimate_list where pno=8";
                                          $result = mysqli_query($con, $sql);
                                          $con = mysqli_num_rows($result) or die('mysqli_error($con)');
                                      
                                    
                                          mysqli_data_seek($result, $con);   
                                          $row = mysqli_fetch_array($result);
                                          $ps_name = $row["pname"];
                                          $amount = 1;
                                          $price = $row["cost"];  
                                          $tot8 = $price * $amount;
                                         
                                      ?>
                                       </td>
                                      <td id="" width="457" style="border-top:1px solid #d9d9d9">
                                          <table id="" class="">
                                             <tbody>
                                                <tr height="45" >
                                                   <td width="229" id="">
                                                      <p class="left font12 gulim">
                                                         <?= $ps_name?>
                                                      </p>
                                                   </td>
                                                   <td width="71" style="border-left:1px solid   #d9d9d9;">
                                                      <input type="text" name="" id="" value="<?=$amount?>" class="center gulim font12" style="width:61px;border:0px;" readonly="">
                                                   </td>
                                                   <td width="61" style="border-left:1px solid   #d9d9d9;" >
                                                      <input type="text" name="" id="" value="<?=$price?>" class="center gulim font12" style="width:61px;border:0px;" readonly=>                                                      
                                                   </td>
                                                   <td width="41" style="border-left:1px solid   #d9d9d9;">
                                                      <p style="font-size: 0.8rem;" id="priceSum"><?=$tot8 ?></p>
                                                   </td>
                                                   <td width="0" text_align="center" style="border-left:1px solid   #d9d9d9;">
                                                   <button type="button" data-idx="<?=$pno?>" value="" id="product_list_ps" name="" onclick="remove_list(this)" >삭제</button>
                                                   </td>
                                                </tr>

                                                
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>




                                 </tbody>   
                              </table>
                        </div>

                        <div id="" style="border-top:2px solid #d9d9d9;">
                           <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
                              <tbody>
                                 <tr height="99" valign="bottom">
                                    <td width="323" align="right">
                                       <!--
                                       <img src="img/pricetot.jpg" style="vertical-align:middle; padding-bottom:33px;">
                                       -->
                                       총 상품금액:
                                    </td>
                                    <td>
                                       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tbody>
                                             <tr valign="bottom">
                                                <td style="" class="NanumGothic font39 red bold" align="right">
                                                   <div id="sum"><?=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8?>원</div>
                                                </td>
                                                <td width="43">
                                                   <!-- <span class="Nanumgothic font15 red bold" id="sum"></span> -->
                                                </td>   
                                             </tr>
                                             <tr>
                                                <a href="recommend.html" target="_blank">추천견적 보러가기</a><br>
                                                   <a href="" class="">장바구니 담기 &nbsp;</a>
                                                   <a href="" class="" target="_blank">견적저장 &nbsp;</a>
                                                   <a href="print_page.php" target="_blank" class="">견적인쇄 &nbsp;</a>
                                                </tr>
                                          </tbody>   
                                       </table>
                                    </td>
                                    
                                 </tr>
                              </tbody>
                              
                           </table>
                        </div>   
                        </div>
                        
                        
                     </form>
                  </td>
                  
               </tr>
            </tbody>   
            </table>
            
         </td>
         
      </tr>
         
      </tbody>
      
   </table>
   <div id="footer">
      <hr>
      이곳은 footer 영역입니다.
   </div>
   <script src="https://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript" src="./js/change_v.js"></script>
   <script type="text/javascript" src="./js/letcpu.js"></script>
   <script type="text/javascript" src="./js/common.js"></script>
   <?php  
    mysqli_close($con);
    ?>
</body>

   
</html>