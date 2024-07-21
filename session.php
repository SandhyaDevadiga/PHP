<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter user name" />
        <br />
        <br />
        <button name="btn" value="set">Set session</button>
        <br />
        <br />
        <button name="btn" value="get">Get session</button>
        <br />
        <br />
        <button name="btn" value="delete">Delete session</button>
    </form>
</body>
</html>
<?php 
session_start();
if(isset($_POST['btn'])){
    if($_POST['btn']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }
    if($_POST['btn']=="get"){
       echo $_SESSION['user'];
    }
    if($_POST['btn']=="delete"){
        session_destroy();
     }
}

?>