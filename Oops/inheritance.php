<?php
class UserLogin{
    function login($userType){
        echo "$userType logged in";

    }
}
class Students extends UserLogin{
   function getName(){
    echo "sandy";
   }
}
class Teacher extends UserLogin{
   
}
$s1=new Students();
$s1->login("students");
echo "<br/>";
$s1->getName();




?>