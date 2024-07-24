<?php

if(isset($_post['filename'])){ 
$filename=$_POST['filename'];
$content=$_POST['content'];
$file=fopen($filename, "w") or die("unable to open");
fwrite($file, $content);
fclose($file);
echo "file created";
}
?>
<form action="" method="post">
<input type="text" name="filename" placeholder="Enter file name" />
        <br />
        <br />
  <textarea name="content">
</textarea>
<br />
<br />
<button>Create File</button>

</form>