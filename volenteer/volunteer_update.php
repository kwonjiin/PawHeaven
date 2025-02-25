<?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from volunteertbl where vname = '".$_GET['vname']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	$row=mysqli_fetch_array($ret);
	/*form으로 넘어가면 post방식/ 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where userid = 'KHD'*//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	$vname = $row["vname"];
	$pnumber = $row["pnumber"];
	$sdate = $row["sdate"];
	$vwhere = $row["vwhere"];
	/*수정 안되게 하고싶을때 readonly*/
?>
<html>


<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>정보 수정</title>
</head>


<body>
	<table align="center">
	<tr>
		<td><H1>정보수정</H1></td>
	<tr>
</table>
	<form method="post" action="volunteer_update_result.php"> 
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="white">
			<td bgcolor="dddddd">이름</td>
			<td><input type="text" name="vname" 
				value=<?php echo $vname ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">전화번호</td>
			<td><input type="text" name="pnumber"
				value=<?php echo $pnumber ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">봉사시작날짜</td>
			<td><input type="text" name="sdate"
				value=<?php echo $sdate ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">사는곳</td>
			<td><input type="text" name="vwhere"
				value=<?php echo $vwhere ?>></td>
		</tr>
	</table>
	<br> <br> 
	<center><input type="submit" value="수정"></center><br> <br> <br> 
	<center><a href="volunteer_list.php">[봉사자 목록]</a></center>
	</form>
</body>
</html>