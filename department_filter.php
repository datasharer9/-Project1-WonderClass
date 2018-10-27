<!DOCTYPE html>

<html>
<head>

<style type="text/css">
	
	@import url("index.css");
	
</style>
</head>
	
<body>

<?php
	
	$q =$_GET['q'];
	
	
	$con = mysqli_connect('localhost','idkhs9','khs16419g!!');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	mysqli_select_db($con,"idkhs9");
	
	$sql1= "SELECT * FROM class_test WHERE primeNum LIKE '".$q."%' ";	
	
	$result = mysqli_query($con,$sql1);
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
				
					<button type="button" onclick="upDown('.$row['primeNum'].','.$row['department'].',0, "department")"><img class="recommend-button" src="images/button_recommend_up자산 6@216x.png" alt="추천 "> </button>
					
					<button "onclick="upDown('.$row['primeNum'].','.$row['department'].', 1, "department")"><img class="recommend-button" src="images/button_recommend_down자산 7@216x.png" alt="비추천 "></button>    
			
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