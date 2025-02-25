 <?php

	$con = mysqli_connect("localhost","projectuser","1234","32207071") or die("접속 실패");
	
	//$num = $_POST["num"];
	$dname = $_POST["dname"];
	$hname = $_POST["hname"];
	$phone = $_POST["phone"];
	$go = $_POST["go"];
	$byeday = $_POST["byeday"];

	
	$sql = "insert into adoptiontbl values ('".$dname;
	$sql = $sql	."','".$hname."','".$phone."','".$go."','".$byeday."')";
	
	$ret=mysqli_query($con, $sql);
	
	
	if($ret){
		echo "<center>입양 등록이 정상적으로 처리됐으며, </center>";
	}else{
		echo "<center>입양 등록에 실패했으며,</center>";
		echo "<center>실패원인 : ".mysqli_error($con)."</center>";
		exit();
	}
	mysqli_close($con);

?>

 <?php 
   $con = mysqli_connect("localhost", "projectuser", "1234", "32207071") or die("MySQL 접속 실패!!");
 
   $dname = $_POST["dname"];
   $hname = $_POST["hname"];
	$phone = $_POST["phone"];
	$go = $_POST["go"];
	$byeday = $_POST["byeday"];
      
   $sql = "DELETE FROM dogtbl WHERE dname='".$dname."'";
      
   $ret = mysqli_query($con, $sql);
   
   if($ret) { 
      echo "<center>유기견 목록에서 성공적으로 삭제됐습니다.</ceter><BR>";
   } else { 
      echo "<center>유기견 목록에서 삭제에 실패했습니다.</ceter><BR>";
      echo "<center>실패 원인 :".mysqli_error($con)."</ceter><BR>";
   } 
   
   mysqli_close($con);
   
    echo "<BR><center><A HREF='dog_list.php'>[유기견 목록]   </A><A HREF='dog_list.php'>[입양 목록]   </A><A HREF='home.html'>[메뉴 목록]</A></ceter>";
?>