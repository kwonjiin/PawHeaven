<HTML> 
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>신규 입력</title>
</head>
<BODY> 


<table align="center">
		<tr>
			<td><H1>신규강아지 입력</H1></td>
		<tr>
</table>
	
<FORM METHOD="post" ACTION="dog_insert_result.php"> 
<table align="center" bgcolor="black" cellspacing="1" cellpadding="10">
	<tr bgcolor="white">
		<td bgcolor="dddddd">강아지 이름</td>
		<td><INPUT TYPE="text" NAME="dname"></td>
	</tr> 
	<tr bgcolor="white">
		<td bgcolor="dddddd">성별</td>
		<td><INPUT TYPE="radio" NAME="gender" value ="수컷">수컷 &nbsp;&nbsp;<INPUT TYPE="radio" NAME="gender" value ="암컷">암컷 </td>
	</tr> 
	<tr bgcolor="white">
		<td bgcolor="dddddd">추정나이</td>
		<td><INPUT TYPE="text" NAME="age"></td>
	</tr > 
	<tr bgcolor="white">
		<td bgcolor="dddddd">구조지역</td>
		<td><INPUT TYPE="text" NAME="place"></td>
	</tr> 
	<tr bgcolor="white">
		<td bgcolor="dddddd">종</td>
		<td><INPUT TYPE="text" NAME="type"></td>
	</tr> 
	<tr bgcolor="white">
		<td bgcolor="dddddd">구조날짜</td>
		<td><INPUT TYPE="text" NAME="date"></td>
	</tr>		
</table>	
   <BR>
   <center><INPUT TYPE="submit" VALUE="저장"></center> 
</FORM> 

<center>
	<A HREF='home.html'>[메뉴화면]</A>
</center>

</table>
</BODY> 
</HTML>
