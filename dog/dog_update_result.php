 <?php
	$con = mysqli_connect("localhost", "projectuser", "1234", "32207071")or die("MYSQL 접속 실패!!");
	
	$dname = $_POST["dname"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$place = $_POST["place"];
	$type = $_POST["type"];
	$date = $_POST["date"];
	
	//$sql = "select * from usertbl where userid = '".$_GET['userid']."'"; /*get으로 받아와서 앞에 써줘야함*//*원래 sql문이랑 같게 씀*/
	$sql = "update dogtbl set age = '".$age."',place = '".$place."', type = '".$type."', date = '".$date."', gender = '".$gender."' where dname = '".$dname."'";
	/*작은따옴표를 큰따옴표로 묶어줌 sql문이니까!앞문장 sql문은 첫번째. 앞에서 끝남*/
	/*update usertbl set username = '단국이', birthyear = 2000 where userid = "DKII"*/
	/*위에서 단국이랑 2000은 php*/
	
	$ret = mysqli_query($con, $sql); /*커넥션을 해서 sql문을 실행해라*//*이게 있어서 수정화면에서 정보 뜸*/
	/*form으로 넘어가면 post방식 파라메타로 넘어가면 get방식*//*post로 넘어가면 post로 받아야함 get이랑 post 둘다 대문자로 써야함*/
	/*select *from buytbl where *//*다른 랭귀지 연결해줄때 . 찍어야함/ 큰따옴표, 작은따옴표 잘 확인해야함 어디서 끊을지*/
	
	echo "<center><h1>정보 수정 결과</h1></center>";
	
	if($ret) {
		echo "<center>데이터가 성공적으로 수정됨</center>";
	}else{
		echo "<center>데이터 수정 실패!!!</center>"."<br>";
		echo "<center>실패원인 : </center>".mysql_error($con);
	}
	
	mysqli_close($con);
	
	echo "<center><br><a href=dog_list.php>[유기견 목록]</a><br><br><br><a href=home.html>[메뉴 화면]</a></center>";
	/*echo는 printf랑 같은거임*//*노트패드 상 보라색부분은 거의다 큰따옴표 생략해도 됨 띄어쓰기 조심해야돼*/
	
?>