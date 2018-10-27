<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<style type="text/css">
		
		@import url("index.css");
		
	</style>
</head>
	
<body>

<?php
	
	$p =$_POST['primeNum'];

	$u =$_POST['upDown'];
	$f =$_POST['filter'];
	
	echo $p;
	echo $f;
	echo $u;
	

	/*
	
	$con = mysqli_connect('localhost','idkhs9','khs16419g!!');
	
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	mysqli_select_db($con,"idkhs9");
	
	if($u ==0){
		$sql1= "UPDATE class_test SET recommend=recommend + 1 WHERE primeNum = '".$p."' ";	
	}else{
		$sql1= "UPDATE class_test SET recommend=recommend -1 WHERE primeNum = '".$p."' ";	
		
	}
	
	mysqli_query($con, $sql1);
	
	//total rank only. department is seperated to upDown_department.php file.
	
	if($f== "total"){
		$sql2="SELECT * FROM class_test ORDER BY recommend DESC LIMIT 100 ";
	}else{
		$sql2= "SELECT * FROM class_test WHERE department ='경영학부' ORDER BY recommend DESC LIMIT 100 ";
	} //".$d."
	
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
					
					<button type="button" onclick="upDown('.$row['primeNum'].', '.$row['department'].', 0, 0)"><img class="recommend-button" src="images/button_recommend_up자산 6@216x.png" alt="추천 "> </button>
					
					<button onclick="upDown('.$row['primeNum'].', '.$row['department'].', 1, 0)"><img class="recommend-button" src="images/button_recommend_down자산 7@216x.png" alt="비추천 "></button>    
			
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
		*/
?>

</body>
</html>