<form action="" method="post">
 <input type="text" name="user" placeholder="enter user name" />
 <br />
 <br />
 <button name="btn" value="set">Set cookies</button>
 <br />
 <button name="btn" value="display">Display cookies</button>
 <br />
 <button name="btn" value="delete">Delete cookies</button>
</form>

<?php 
if(isset($_POST['btn'])){ 
if($_POST['btn']=="set"){
    $val=$_POST['user'];
    setcookie("user",$val);
    echo "cokie is set";
}
if($_POST['btn']=="display"){
   if(isset($_COOKIE['user'])){
    echo $_COOKIE['user'];
   }
}
if($_POST['btn']=="delete"){
    if(isset($_COOKIE['user'])){
    setcookie("user",null,-1);
    }
 }
}
?>