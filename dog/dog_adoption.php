<?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from dogtbl where dname = '".$_GET['dname']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	$row=mysqli_fetch_array($ret);
	/*form으로 넘어가면 post방식/ 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where userid = 'KHD'*//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	$dname = $row["dname"];
	$hname = $row["hname"];
	$phone = $row["phone"];
	$go = $row["go"];
	$byeday = $row["byeday"];
	
?>
<HTML> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>축 입양</title>
</head>
<BODY> 


<table align="center">
		<tr>
			<td><H1>~입양을 축하드립니다~</H1></td>
		<tr>
</table>
	<form method="post" action="dog_adoption_result.php"> 
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="white">
			<td bgcolor="dddddd">강아지이름</td>
			<td><input type="text" name="dname" 
				value=<?php echo $dname ?> readonly ></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">보호자 이름</td>
			<td><input type="text" name="hname"
				value=<?php echo $hname ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">전화번호</td>
			<td><input type="text" name="phone"
				value=<?php echo $phone ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">지역</td>
			<td><input type="text" name="go"
				value=<?php echo $go ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">입양날짜</td>
			<td><input type="text" name="byeday"
				value=<?php echo $byeday ?>></td>
		</tr>
	</table>
	<br> 
	<center><input type="submit" value="가족의탄생"></center>
	<br><center><a href="dog_list.php">[유기견 목록]</a></center>
	</form>
</body>
</html>