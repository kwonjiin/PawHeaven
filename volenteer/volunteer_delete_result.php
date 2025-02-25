 <?php 
   $con = mysqli_connect("localhost", "projectuser", "1234", "32207071") or die("MySQL 접속 실패!!");
 
   $vname = $_POST["vname"];
      
   $sql = "DELETE FROM volunteertbl where vname='".$vname."'";
      
   $ret = mysqli_query($con, $sql);
   
   echo "<center><H1>봉사자 삭제결과</H1></ceter>";
   
   if($ret) { 
      echo "<center>성공적으로 삭제됨.</ceter><BR>";
   } else { 
      echo "<center>데이터 삭제 실패!!!</ceter><BR>";
      echo "<center>실패 원인 :".mysqli_error($con)."</ceter><BR>";
   } 
   
   mysqli_close($con);
   
    echo "<BR><center><A HREF='volunteer_list.php'>[봉사자 목록]</A><BR><BR><BR><A HREF='home.html'>[메뉴 화면]</A></ceter>";
?>

