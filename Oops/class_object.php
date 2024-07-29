<?php
// class MathOperations{
// function sum(){
//     echo 10+20;
// }
// }
// $maths=new MathOperations();
// $maths->sum();



class Properties{
  public $name="sandy";
  function getname(){
    echo $this->name;
  }
  function updateName($name){
    echo $this->name=$name;
  }

}
$Spl=new Properties();
$Spl->getName();
echo "<br/>";
$Sp2=new Properties();
$Sp2->updateName("Suchitra");
?>