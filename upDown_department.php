<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
		@import url("index.css");
		
	</style>
</head>
	
<body>

<?php
	
	$p =$_POST['primeNum'];
	$u =$_POST['upDown'];

	
	
	$con = mysqli_connect('localhost','idkhs9','khs16419g!!');
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	mysqli_select_db($con,"idkhs9");
	
	if($u==0){
		$sql1= "UPDATE class_test SET recommend=recommend + 1 WHERE primeNum = '".$p."' ";	
	}else{
		$sql1= "UPDATE class_test SET recommend=recommend -1 WHERE primeNum = '".$p."' ";	
		
	}
	
	mysqli_query($con, $sql1);
	
	$department =substr($p, 0,5);
	
	$sql2="SELECT * FROM class_test WHERE primeNum LIKE '".$department."%' ORDER BY recommend DESC LIMIT 100 ";
	
	$result = mysqli_query($con,$sql2);
	
	$rank = 1;
	
	
						
					
				
	echo '<table id="rank-table"  cellspacing="0" cellpadding="3">

				
					<tr id="table-head">
					
					<th></th>
					<th id="th-recommend">추천수 </th>
					<th id="th-rank">순위 </th>
					<th id="th-class">과목명 </th>
					<th id="th-professor">교수님 </th>
					<th id="th-grade">학점 </th>
					</tr>';
	
	while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
		
	echo '<tr class="line-rankbox">
					
					<td class="tr-button">
					
					<button type="button" onclick="upRecommend('.$row['primeNum'].')"><img class="recommend-button" src="images/button_recommend_up자산 6@216x.png" alt="추천 "> </button>
					
					<button><img class="recommend-button" src="images/button_recommend_down자산 7@216x.png" alt="비추천 "></button>    
			
				</td>';
	
						
						
					echo '<td class="td-recommend">'.$row[recommend].'</td>
					<td class ="td-rank">'.$rank.'</td>
					<td class="td-class">'.$row['className'].'</td>
					<td class="td=professor">'.$row['professor'].'</td>
					<td class="td-grade">'.$row['grade'].' </td>
					
					</tr>';
					$rank= $rank+1;
					}

echo '</table>';
		
?>
</body>
</html>