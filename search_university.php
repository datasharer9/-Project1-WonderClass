<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
	
	<style>
	
		#university_dropdown{
			margin: 0em;
			margin-left: 4em;
			width: 35em;
			position: relative;
			z-index: 1;
			border:  rgba(204,204,204,1.00) solid thin;
		}
		
		#university_dropdown>tr{
			float: left;
		}
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
$sql1= "SELECT university_name FROM university WHERE university_name LIKE '%".$q."%' LIMIT 3";	
$result = mysqli_query($con,$sql1);
	
	if(strlen($q)!=0){
		
	while($row=mysqli_fetch_assoc($result)){

		echo '<tr> <td><a href=index.html>'.$row['university_name'].'<td> </tr>';
		
	}
	}
	?>
	
	
	
</body>
</html>
