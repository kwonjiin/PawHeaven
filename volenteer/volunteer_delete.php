 <?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from volunteertbl where vname = '".$_GET['vname']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	$row=mysqli_fetch_array($ret);
	/*form으로 넘어가면 post방식/ 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where userid = 'KHD'*//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	
	$vname = $row["vname"];
	$pnumber = $row["pnumber"];

	/*수정 안되게 하고싶을때 readonly*/
?>

<HTML> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>봉사자 삭제</title>
</head>
<body>
	<center><h1>봉사자 삭제</h1></center><br><br>
	<form method="post" action="volunteer_delete_result.php">
	<input type=hidden name=vname value=<?php echo $vname ?>>
	<table align="center"bgcolor=black cellspacing=1 cellpadding=10>
		<tr bgcolor=white align=center>
			<td bgcolor=dddddd>이름</td>
			<td width=150><?php echo $vname ?></td>
		</tr>
		<tr bgcolor=white align=center>
			<td bgcolor=dddddd>전화번호</td>
			<td width=150><?php echo $pnumber ?></td>
		</tr>
	</table>
	<br> <br>
	<center>위 봉사자를 삭제하시겠습니까?&nbsp;&nbsp;<INPUT TYPE="submit" VALUE="삭제"></center>
	</FORM> 
<br><br>
<center>
	<A HREF='volunteer_list.php'>[이전화면]</A>&nbsp;&nbsp;&nbsp;
	<A HREF='home.html'>[메뉴화면]</A>
</center>

</BODY> 
</HTML>
