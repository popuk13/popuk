<?php
                session_start();
                $_SESSION['username'] ;
                
 		session_start(); 
  		$_SESSION['ts'];
		$ts=	$_SESSION['ts'];
                $nn=$_SESSION['username'] ;
                $db = mysql_connect("localhost","pop","123"); //�������� ����� � ������ �� �'������� � ����� �����
		 mysql_select_db("content",$db); //������ ����� ���� �����
		$query = "INSERT INTO rr (nn,ts)  VALUES ('$nn','$ts')";
		$result = mysql_query($query, $db);
	


session_start();
 echo    "<h3 align='center'>", "<p style=color:#000000>", $_SESSION['username'] ," </h3> <h1 align=center style=color:#00008b >  ���� ��������!";
echo "</h1>";
session_start();
  unset($_SESSION['username']); 
?>