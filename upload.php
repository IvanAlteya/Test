<?php

if(isset($_POST['submit']))
{ 
   mysqli_connect("localhost", "root", "", "alteyadb") or die("ERROR:Connection lost");
      $filename=$_FILES['file']['name'];
     $filetype=$_FILES['file']['type'];
   if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif')
      {
         move_uploaded_file($_FILES['file']['tmp_name'],'picture/'.$filename);
            $filepath="/picture/".$filename;
            $sql="INSERT INTO productinfo2 (image,name) VALUES('$filepath','$filename'))";
         mysql_query($sql);
      }
}
?>