<?php 

$db = mysql_connect("localhost","pop","123"); //�������� ���� � ������ �� �'������� � ����� �����
 mysql_select_db("content",$db); //������ ����� ���� �����
 
 
$query = "select * from ppp ORDER BY `id`";
$result = mysql_query($query, $db);

echo "<table border=1 height=20% align=center>", "<tr>","<td>" ,"�����","</td>","<td>","���������","</td>","<td>","���.1","</td>","<td>","���.2","</td>","<td>","���.3","</td>","<td>","���.4","</td>","<td>","���.5","</td>","<td>","� ����. ���.","</td>" , "</tr>" ; 
     while($row = mysql_fetch_array($result))

           

 echo "<td>",   $row["id"], "</td>","<td>",$row["put"],"</td>","<td>",$row["vid1"],"</td>","<td>",$row["vid2"],"</td>","<td>",$row["vid3"],"</td>","<td>",$row["vid4"],"</td>","<td>",$row["vid5"],"</td>","<td>",$row["pvid"],"</td>",                                     "</tr>"  ;      



echo  "</table>";  
         
	


?>