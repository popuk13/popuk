<?php 
if (isset($_POST['put']))
{
  $put = $_POST['put'];
}
if (isset($_POST['vid1']))
{
  $vid1 = $_POST['vid1'];
}
if (isset($_POST['vid2']))
{
  $vid2 = $_POST['vid2'];
}
if (isset($_POST['vid3']))
{
  $vid3 = $_POST['vid3'];
}
if(isset($_POST['vid4']))
{
$vid4=$_POST['vid4'];
}
if(isset($_POST['vid5']))
{
$vid5=$_POST['vid5'];
}
if(isset($_POST['pvid']))
{
$pvid=$_POST['pvid'];
}

$db = mysql_connect("localhost","pop","123"); //�������� ����� � ������ �� �'������� � ����� �����
 mysql_select_db("content",$db); //������ ����� ���� �����
   $query = "INSERT INTO ppp (put,vid1,vid2,vid3,vid4,vid5,pvid)  VALUES ('$put','$vid1','$vid2','$vid3','$vid4','$vid5','$pvid')";
$result = mysql_query($query, $db);
if ($result=='true')
{
echo "���� ������ ����������!";
}      
else 
{
echo "���� �� ���������!";
}	
echo "<table border=1 widht=100px align='center'}>, <a href=index.php>������� ��� ���� �����.</a>,  </table>  ";
echo "<table border=1 widht=100px align='center'}>, <a href=vvid.php>������ �� ���� ����!</a>,  </table>  ";
?>