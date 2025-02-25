 <?php 
   $con = mysqli_connect("localhost", "projectuser", "1234", "32207071") or die("MySQL 접속 실패!!");
 
   	$dname = $_POST["dname"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$place = $_POST["place"];
	$type = $_POST["type"];
	$date = date("Y-m-j");
      
   $sql = "INSERT INTO dogtbl VALUES ('".$dname."','".$age."','".$place;   
   $sql = $sql."','".$type."','".$date."','".$gender."', null, null, null, null)";
   
   $ret = mysqli_query($con, $sql);
   
   echo "<center><H1>유기견 추가 결과</H1></ceter>";
   
   if($ret) { 
      echo "<center>데이터가 성공적으로 입력됨.</ceter><BR>";
   } else { 
      echo "<center>데이터 입력 실패!!!<center><BR>";
      echo "<center>실패 원인 :".mysqli_error($con)."</ceter><BR>";
   } 
   
   mysqli_close($con);
   
   echo "<BR><BR><center><A HREF='dog_list.php'>[유기견 관리]</A><br><br><br><BR><A HREF='home.html'>[메뉴 화면]</A></ceter>";
?>
