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
$res=$mysqli->query("INSERT INTO `playlists` ( `id`, `code`) VALUES ('".$_POST['id']."', '".$_POST['code']."');");
header('Location: /cm_panel.php');
exit;	
?>
</body>
</html>