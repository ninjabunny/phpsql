<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","user","VfWZybe39KhsfMVL");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("user", $con);
 
$sql="INSERT INTO nametable (fname, lname)
VALUES
('$_POST[fname]','$_POST[lname]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>