<?php
// $file="dummy.txt";
// $myFile=fopen($file, "r") or die("unable to read");
// echo fread($myFile,filesize($file));
// fclose($myFile);
if(isset($_FILES['file'])){
    print_r($_FILES['file']);
    $myFile=fopen($file, "r") or die("unable to read");
echo fread($myFile,filesize($file));
fclose($myFile);
}

?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="file" />
    <br />
    <br />
    <button>read file</button>
</form>