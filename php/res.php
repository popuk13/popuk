<?php 

$db = mysql_connect("localhost","pop","123"); //�������� ���� � ������ �� �'������� � ����� �����
 mysql_select_db("content",$db); //������ ����� ���� �����
   $query = "select * from rr";
$result = mysql_query($query, $db);

echo "<table border=1 height=20% align=center>", "<tr>","<td>" ,"�����","</td>","<td>","�'�� �����������","</td>","<td>","ʳ������ ���������� ��������","</td>", "</tr>" ; 
     while($row = mysql_fetch_array($result))

           

 echo "<td>",   $row["id_k"], "</td>","<td>",$row["nn"],"</td>","<td align='center' >",$row["ts"],"</td>",  "</tr>"  ;      
 

echo  "</table>";  
         
	


?>