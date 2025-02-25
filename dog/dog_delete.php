 <?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from dogtbl where dname = '".$_GET['dname']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	$row=mysqli_fetch_array($ret);
	/*form으로 넘어가면 post방식/ 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where userid = 'KHD'*//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	
	$dname = $row["dname"];
	$type = $row["type"];

	/*수정 안되게 하고싶을때 readonly*/
?>
<html>


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>유기견 삭제</title>
</head>


<body>
	<center><h1>강아지 삭제</h1></center><br><br>
	<form method="post" action="dog_delete_result.php">
	<input type=hidden name=dname value=<?php echo $dname ?>>
	<table align="center"bgcolor=black cellspacing=1 cellpadding=10>
		<tr bgcolor=white align=center>
			<td bgcolor=dddddd>이름</td>
			<td width=150><?php echo $dname ?></td>
		</tr>
		<tr bgcolor=white align=center>
			<td bgcolor=dddddd>종</td>
			<td width=150><?php echo $type ?></td>
		</tr>
	</table>
	<br> <br>
	<center>목록에서 삭제하시겠습니까?
	<input type=submit value="삭제">
	<a href=dog_list.php><input type=button value="취소"></a></center>
	</form>
</body>
</html>