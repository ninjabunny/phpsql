<html>
<body>
 
 
<?php
$con = mysql_connect("localhost","user","jXhmjG4XUStTYRSQ");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("user", $con);
 
$sql="INSERT INTO nametable (firstname, lastname)
VALUES
('$_POST[firstname]','$_POST[lastname]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>