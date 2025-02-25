<?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from adoptiontbl"; /*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*/
?>

<html>


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>입양간 목록</title>
</head>


<body>
	<center><h1>가족이 생긴 친구들</h1></center>
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="dddddd" align="center"> 
			<td>강아지 이름</td><td>보호자 이름</td><td>전화번호</td><td>지역</td><td>입양날짜</td>
		</tr> 
<?php /*align= left, right도 가능*/
	while($row=mysqli_fetch_array($ret)){ /*ret는 전체, row는 한줄을 뜻함*/
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['dname']?></td>  
			<td><?php echo $row['hname']?></td>
			<td><?php echo $row['phone']?></td>
			<td><?php echo $row['go']?></td>
			<td><?php echo $row['byeday']?></td>

<?php /*echo는 printf와 같은뜻*//*대문자 똑같이 해줘야함*/
	}
	mysqli_close($con);
	
?>
	</table>
	<br> <center><a href="home.html">[메뉴화면]</a></center>
</body>


</html>