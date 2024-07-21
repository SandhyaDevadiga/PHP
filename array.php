<?php
$array=["sandy", "chandra", "Geetha"];
// echo $user[1];
// echo "<br/>";
// echo $user[2];

// for($user=0; $user<count(user); $user++){
//   echo $array[$user];
//   echo "<br/>";
// }

 $userDetails=[
  "name"=>"anil",
  "age"=>29,
   "city"=> "delhi" 
 ];

 echo $userDetails["age"];
 foreach($userDetails as $key=>$data){
  echo $key ."  is=>".$data;
  echo "<br/>"; 
 }
 
 
 $test=[
  [1,"anil", "noida", "sandy@g.com"],
  [2,"aman", "noida", "sandy@g.com"],
  [3,"amul", "moida", "amul@g.com"]
 ];

  print_r($test);

  array_pop($array);
  print_r($array);
  echo "<br/>"; 
  $name="anil";
  function getName(){
      global $name;
      echo "local var: $name";
    }
    getName();
    echo "<br/>";
  echo $name;
  
include("./HTML.php");
?>