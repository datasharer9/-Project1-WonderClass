<!doctype html>

<?php

$q =$_GET['searchClass'];
	
$con = mysqli_connect('localhost','idkhs9','khs16419g!!');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"idkhs9");
$sql1= "SELECT * FROM class_test WHERE className LIKE '%".$q."%' OR professor LIKE '%".$q."%' LIMIT 100";
//$sql1= "SELECT * FROM class_test WHERE match (className) against ('".$q."') OR match (professor) against ('".$q."') LIMIT 100";
	
$result = mysqli_query($con, $sql1); 
	

?>





<html>
<head>
	

<meta charset="utf-8">
<link href="index.css" rel="stylesheet" type="text/css">
	
	<script>
				
	function upRecommend(str) {
   
    	xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rank").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","upRecommend.php",true); 
		xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("upRecommend="+ str); //
		
		}
		
</script>
	</head>
<body>

	<div class="bluecolor"> </div>
		<div class="container1">
	
	<header>
		
		<div class="head_nav">
			<div class="tie">
			 <ol>로그인</ol>
			 <ol>서비스 소개 </ol>
			 <ol>불편/개선 사항 보내기 </ol>	
			</div>
		</div>

	<div class="logobanner">
		<div id="logo"><img src="images/소형로고.png" alt=""></div>
		<div class="sentence">강의에 순위를 매겨 빠르게 좋은 강의를 찾는 방법</div>
		</div>
		
		<nav>
			<div class="big_sort">
		<div class="tie2">
			
			<div>대학교 </div>
			<div>인터넷 강의 </div>
			<div>고등학교 </div>
			
		</div>
			</div>
		</nav>
		
		
	</header>
			
		<div id="search-box">
			<span><img id="reading-glasses" src="images/noun_Search_1613659_51A7F9.png" alt=""></span>
			<span><input id="search-input" type="text" placeholder="대학명을 검색하세요!"></span>
			</div>
	
	<div id="university-name">대학교명db</div>
		<h2>순위정렬기준 선택 </h2>
		<div class="wrap_box">
			<div class="sort_box">
				
				<div class="college">
					<div class="sort_univ">종합순위  </div>
				</div>
			 
					<div class="college">
						<div class="sort_univ">인문과학대</div >
						<div>국제비즈니스어학부/영어 </div>
						<div>국제비즈니스어학부/일어 </div>
						<div>국제비즈니스어학부/중어 </div>
						<div>국제비즈니스어학부/노어 </div>
						<div>국제비즈니스어학부/불어 </div>
						<div>문학콘텐츠학부/문화콘텐츠 </div>
						<div>문학콘텐츠학부/국어국문학 </div>
						<div>문학콘텐츠학부/철학 </div>
						<div>아동학과 </div>
					</div>
					<div class="social_science">
						<div class="sort_univ">사회과학대학  </div>
						<div>공공인적자원학부 </div>
						<div>금융경제학과 </div>
						<div>경영학부 </div>
						<div>군사학과 </div>
						<div>글로벌경영학과 </div>
					</div>
					<div class="science">
						<div class="sort_univ">이공대학 </div>
						<div>컴퓨터공학과 </div>
						<div>컴퓨터과학과 </div>
						<div>화학생명공학과 </div>
						<div>토목건축공학과 </div>
						<div>산업경영시스템공학과 </div>
						<div>나노융합공학과 </div>
						<div>도시공학과 </div>
						<div>금융정보공학과 </div>
					</div>
					<div class="arts">
	                    <div class="sort_univ">예술대학 </div>
	                    <div>디자인학부 </div>
	                    <div>음악학부 </div>
	                    <div>뮤지컬학부 </div>
	                    <div>실용음악학과 </div>
	                    <div>무용예술학과/한국무용 </div>
	                    <div>공연예술학부/연기 </div>
	                    <div>공연예술학부/무대기술 </div>
	                    <div>공연예술학부/모델연기 </div>
	                    <div>공연예술학부/무대패션 </div>
	                    <div>공연예술학부/영화영상학과 </div>			
				</div>
				<div class="beauty_arts">
					<div class="sort_univ">미용예술대학 </div>
					<div>헤어메이크업디자인학과 </div>
					<div>뷰티테라피&메이크업학과 </div>
				</div>
				<div class="else">
					<div class="sort_univ">기타  </div>
					<div>교양 </div>
					<div>OCU </div>
				</div>
			</div>
			
				<div class="모든과목"> </div>
		</div>
		<div class="container_rank">
			
				<div id="box_banner">
					<div class="rank-banner">실시간으로 움직이는 순위 </div>
					
				  <form action="searchResult2.php#box_banner" method="get">
						
					<input id="search-class" type="search" name="searchClass" placeholder="강의명, 교수명을 검색하세요!" >
					<img type="submit" id="reading_glasses" src="images/noun_Search_1613659_51A7F9.png" alt="">
					
						</form>
					
					
					
				
				</div>
			
			<div id="rank">
				
				<?php
					$rank = 1;
				
				echo '<table id="rank-table"  cellspacing="0" cellpadding="3">

				
					<tr id="table-head">
					
					<th></th>
					<th id="th-recommend">추천수</th>
					<th id="th-rank">순위 </th>
					<th id="th-class">강의명  </th>
					<th id="th-professor">교수명  </th>
					<th id="th-grade">학점 </th>
					</tr>';	
				
				while($row=mysqli_fetch_assoc($result)){

					echo '<tr class="line-rankbox">
					
	
	<td class="tr-button"><button type="submit" onclick="upRecommend('.$row[primeNum].')"><img class="recommend-button" src="images/button_recommend_up자산 6@216x.png" alt="추천 "> </button>
	

	<button><img class="recommend-button" src="images/button_recommend_down자산 7@216x.png" alt="비추천 "></button>    
	
				</td>';
				
						
					echo '<td class="td-recommend">'.$row['recommend'].'</td>
					<td class ="td-rank">'.$rank.'</td>
					<td class="td-class">'.$row['className'].'</td>
					<td class="td=professor">'.$row['professor'].'</td>
					<td class="td-grade">'.$row['grade'].' </td>
					
					</tr>';
					$rank=$rank+1;
					}
				

echo '</table>';
	
		?>		
				
					
					
	
        </div>	
		
		
	
	</div>
	</div>	
</body>
	<footer>
	</footer>
</html>