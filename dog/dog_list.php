<?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from dogtbl"; /*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*/
?>

<html>


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>유기견 목록</title>
</head>


<body>
<table align="center">
		<tr>
			<td><H1>유기견 목록</H1></td>
		<tr>
</table>
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="dddddd" align="center"> 
			<td>이름</td><td>추정나이</td><td>성별</td><td>구조지역</td><td>종</td><td>구조날짜</td>
			<td>수정</td><td>입양</td><td>삭제</td>
		</tr> 
<?php /*align= left, right도 가능*/
	while($row=mysqli_fetch_array($ret)){ /*ret는 전체, row는 한줄을 뜻함*/
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['dname']?></td>  
			<td><?php echo $row['age']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['place']?></td>
			<td><?php echo $row['type']?></td>
			<td><?php echo $row['date']?></td>
			<td><a href=dog_update.php?dname=<?php echo $row['dname']?>>수정</td>
			<td><a href=dog_adoption.php?dname=<?php echo $row['dname']?>>입양</td>
			<td><a href=dog_delete.php?dname=<?php echo $row['dname']?>>삭제</td>
		</tr>
<?php /*echo는 printf와 같은뜻*//*대문자 똑같이 해줘야함*/
	}
	mysqli_close($con);
	
?>
	</table>
	<br><center><a href="home.html">[메뉴화면]</a><center>
</body>


</html>