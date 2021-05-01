<!DOCTYPE html>
<html>
<head>
	<title>:: 견적서 ::</title>
</head>

<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
	<div id="print_page">
	<table width="710" border="0" align="center" cellpadding="0" cellspacing="0">
		<tbody><tr>
			<td align="center"><table width="700" border="0" cellpadding="0" cellspacing="1" bgcolor="cccccc">
				<tbody>
					<tr>
						<td height="30" align="center" bgcolor="#FFFFFF"><br>
							<table width="95%" border="0" cellpadding="0" cellspacing="0">
								<tbody><tr>
									<td height="55" colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
										<tbody><tr>
											<td>
												<img src="./img/one_title.gif">
											</td>
										</tr>
											
										</tbody>
									</table>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody><tr>
											<td height="10"></td>
										</tr>
										<tr>
											<td height="58">
												<img src="./img/seoil.gif">
											</td>
										</tr>
											
										</tbody>
										
									</table>	
									</td>
								</tr>
								
								</tbody>
								
							</table>
							<table width="98%" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>
											<img src="img/icon_black.gif" width="8" height="6" align="absmiddle"> 아래와 같이 견적합니다.
										</td>
									</tr>
								</tbody>
								
							</table>
							
						</td>
						<table width="100%" cellpadding="0" cellspacing="3" border="1" bordercolor="#CFCFCF" style="border-collapse:collapse; position: relative;">
							<tbody></tbody>
							
						</table>
						<!-- -->

					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="0">
							<tbody><tr>
								<td>
									<img src="img/one_title2.gif">
									<hr>
								</td>
							</tr>
								
							</tbody>
						</table>
							
						</td>
					</tr>

					<tr>
						<td><!--리스트 시작 부분-->

							   
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">'
								<colgroup>
									<col width="6" align="center">
									<col width="30" align="center">
									<col width="1" align="center">
									<col width="70" align="center">
									<col width="1" align="center">
									<col width="180" align="center">
									<col width="1" align="center">
									<col width="70" align="center">
									<col width="1" align="center">
									<col width="20" align="center">
									<col width="1" align="center">
									<col width="70" align="center">
									<col width="6" align="center">
								</colgroup>
								<?php
								$con = mysqli_connect("localhost", "root", "root", "product_list");
								mysqli_set_charset($con, "utf-8");
								$sql = "select * from estimate_list";
								$result = mysqli_query($con, $sql);
								$conn = mysqli_num_rows($result) or die('mysqli_error($con)');
								
								for($i = 0; $i < $conn; $i++) {
									mysqli_data_seek($result, $i);   
									$row = mysqli_fetch_array($result);
									$pno = $row["pno"];
									$division = $row["division"];
									$pname = $row["pname"];   
									$amount =$row["amount"];   
									$cost = $row["cost"];
									$tot = $cost * $amount;  
																
								
								?>
								<tr>
									<td align="center" width="70" height="30"><?=$pno?></td>
									<td align="center" width="70" height="30"><?=$division?></td>
									<td align="center" width="320" height="30"><?=$pname?></td>
									<td align="center" width="80" height="30"><?=$cost?></td>
									<td align="center" width="50" height="30"><?=$amount?></td>
									<td align="center" width="40" height="30"><?=$tot?></td>
								</tr>
								<?php }
									
								?>
							</table>
							<!-- 리스트 끝-->
						</td>
					</tr>
					<tr>
						<td>
							<hr>
						</td>
					</tr>
				</tbody>
				
			</td>
		</tr>
		<tr>
			<td colspan="2"> &nbsp;
				
			</td>
		</tr>
		<!--총 합계금액 구하기-->
		<?php
			$tot_arr = array();
			$sql = "select cost, amount from estimate_list";
			$result = mysqli_query($con, $sql);
			while($row = mysqli_fetch_assoc($result)){
				$tot_cost[] = $row["cost"];
				$tot_amount[] = $row["amount"];
			}

			

		
		?>



		<tr>
		<?php 
				$tot_price=0;
				for($j=0; $j<8; $j++){
					$sum = $tot_cost[$j]*$tot_amount[$j];
					$tot_price = $tot_price + $sum;
					}
					
				?>
			<td colspan="2" align="right"><b><span class="gray_bold">합계금액</span> <span class="black_bold">: <?=$tot_price?>원</span></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="2"><span>
				*** 상기 견적서는 단순 참고용이며, 실제 컴퓨터 부품 시장에서의 가격과 차이가 있을 수 있습니다.
			</span>
				
			</td>
		</tr>

		</tbody>
	</table>

</body>
</html>