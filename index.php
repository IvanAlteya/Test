
<html>
  <title>TEST IMAGE UPLOAD</title>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
ChooseFile: <input type="file" name="file">
 <input type="submit" name="submit" value="Upload">
</form>


<?php
mysqli_connect("localhost", "root", "", "alteyadb");
$sql="SELECT * FROM productinfo2";
$rdata=mysql_query($sql);
while($res=mysql_fetch_array($rdata))
{
$imgpath=$res['image'];
echo "<img src='$imgpath' height='20' width='20'>";
} 
?>
</body>
</html>