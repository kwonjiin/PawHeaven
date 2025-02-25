<?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	$sql = "select * from dogtbl where dname = '".$_GET['dname']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	$row=mysqli_fetch_array($ret);
	/*form으로 넘어가면 post방식/ 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where userid = 'KHD'*//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	$dname = $row["dname"];
	$age = $row["age"];
	$gender = $row["gender"];
	$place = $row["place"];
	$type = $row["type"];
	$date = $row["date"];
	/*수정 안되게 하고싶을때 readonly*/
	$gender_1 = "";
	$gender_2 = "";
	if($gender =='수컷')
		$gender_1 = "checked";
	else
		$gender_2 = "checked";
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
	<form method="post" action="dog_update_result.php"> 
	<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
		<tr bgcolor="white">
			<td bgcolor="dddddd">이름</td>
			<td><input type="text" name="dname" 
				value=<?php echo $dname ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">추정나이</td>
			<td><input type="text" name="age"
				value=<?php echo $age ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">성별</td>
			<td><INPUT TYPE="radio" NAME="gender" value='수컷' <?=$gender_1?> >수컷 &nbsp;&nbsp; <INPUT TYPE="radio" NAME="gender" value='암컷' <?=$gender_2?>>암컷 </td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">구조지역</td>
			<td><input type="text" name="place"
				value=<?php echo $place ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">종</td>
			<td><input type="text" name="type"
				value=<?php echo $type ?>></td>
		</tr>
		<tr bgcolor="white">
			<td bgcolor="dddddd">구조날짜</td>
			<td><input type="text" name="date"
				value=<?php echo $date ?>></td>
		</tr>
	</table>
	<br>
	
	<center><input type="submit" value="수정"></center>
	<br>
	<center><a href="dog_list.php">[유기견 목록]</a></center>
	</form>
</body>
</html>