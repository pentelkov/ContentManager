<!DOCTYPE HTML>
<html>
 <head>
  <BASE TARGET="_parent">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>RDS enter personal account</title>
</head>
<body>
<?
$mysqli = new mysqli("80.243.15.51","qwe","123", "RDSDB");
$res=$mysqli->query("DELETE FROM `playlists` WHERE `id` = '".$_GET['id']."'");
//echo "DELETE FROM `playlists` WHERE `id` = '".$_GET['id']."'";
header('Location: /cm_playlists.php');
exit;	
?>

</body>
</html>