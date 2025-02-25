  <?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from volunteertbl"; /*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*/
?>

<html>


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>봉사자 목록</title>
</head>


<body>
	<center><h1>봉사자 목록</h1></center>
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="dddddd" align="center"> 
			<td>이름</td><td>전화번호</td><td>봉사시작날짜</td><td>사는곳</td>
			<td>수정</td><td>삭제</td>
		</tr> 
<?php /*align= left, right도 가능*/
	while($row=mysqli_fetch_array($ret)){ /*ret는 전체, row는 한줄을 뜻함*/
?>
		<tr bgcolor="white" align="center">
			<td><?php echo $row['vname']?></td>  
			<td><?php echo $row['pnumber']?></td>
			<td><?php echo $row['sdate']?></td>
			<td><?php echo $row['vwhere']?></td>
			<td><a href=volunteer_update.php?vname=<?php echo $row['vname']?>>수정</td>
			<td><a href=volunteer_delete.php?vname=<?php echo $row['vname']?>>삭제</td>
		</tr>
<?php /*echo는 printf와 같은뜻*//*대문자 똑같이 해줘야함*/
	}
	mysqli_close($con);
	
?>
	</table>
	<center>
	<br><A HREF='volunteer_insert.php'>[봉사자 추가]</A><br><br>
	<br> <a href="home.html">[메뉴 화면]</a>
</center>
	
</body>


</html>