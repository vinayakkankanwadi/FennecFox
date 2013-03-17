<?php require_once('Connections/Test.php'); ?>

<?php 
mysql_select_db($database_Test, $Test);

$sql = "SELECT distinct content.ctype FROM content where content.ctype !='NULL'"; 
$rs_result = mysql_query($sql,$Test) or die(mysql_error()); 

while ($row = mysql_fetch_assoc($rs_result)) { 
	 $cont = $row['ctype'];
     echo "<a href='page.php?type=".$cont."'>".$cont."</a> "; 
}; 
 
?>

<?php 
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 9; 
if (isset($_GET["type"])) { $type  = $_GET["type"]; } else { $type="ANY"; }; 
mysql_select_db($database_Test, $Test);

$sql = "SELECT * FROM content ORDER BY cname ASC LIMIT $start_from, 9"; 
if ($type !="ANY" )
{
	$sql ="SELECT * FROM content where ctype ='".$type."' ORDER BY cname ASC LIMIT $start_from, 9"; 
}
$rs_result = mysql_query ($sql,$Test) or die(mysql_error()); 
?> 


<table class="pageitem">
<!-- <tr><td>DESCRIPTION</td><td>TYPE</td></tr> -->
<?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?> 
            <tr>
            <td>
                <table class="item"> 
				<tr class="type"><a><? echo $row["ctype"];?></a></tr>
                <tr class="typeimg"></tr>
                <tr class="desc"><a><? echo $row["desc"];?></a></tr>
                </table>
            </td>
            </tr>
<?php 
}; 
?> 
</table>
<?php 
$sql = "SELECT COUNT(cname) FROM content"; 
if ($type !="ANY" )
{
	$sql = "SELECT COUNT(cname) FROM content where ctype ='".$type."'"; 
}

$rs_result = mysql_query($sql,$Test); 
$row = mysql_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 9); 
 
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='page.php?page=".$i."'>".$i."</a> "; 
}; 
?>


<!DOCTYPE HTML>
<html>
<head>
<link href="css/style.php" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>Fennec Fox Blog</title>
</head>
<body style="font-size: 24px; font-family: 'Century Gothic'; display: table-row; color: #C7C7C7; appearance: menubar;">
</body>
</html>