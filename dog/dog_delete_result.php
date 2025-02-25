 <?php 
   $con = mysqli_connect("localhost", "projectuser", "1234", "32207071") or die("MySQL 접속 실패!!");
 
   $dname = $_POST["dname"];
      
   $sql = "DELETE FROM dogtbl WHERE dname='".$dname."'";
      
   $ret = mysqli_query($con, $sql);
   
   echo "<center><H1>강아지 삭제 결과</H1></ceter>";
   
   if($ret) { 
      echo "<center>성공적으로 삭제됨.</ceter><BR>";
   } else { 
      echo "<center>데이터 삭제 실패!!!</ceter><BR>";
      echo "<center>실패 원인 :".mysqli_error($con)."</ceter><BR>";
   } 
   
   mysqli_close($con);
   
    echo "<BR><BR><center><A HREF='dog_list.php'>[유기견 목록]</A><BR><BR><BR><A HREF='home.html'>[메뉴 화면]</A></ceter>";
?>
