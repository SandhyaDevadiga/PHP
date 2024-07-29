<?php
// cannot be inherit final class
// final class Honda{

// }
// class Car extends Honda{

// }
// $car=new Car();


// cannot override parent final functions
class Honda{
 final function company(){
    echo "Honda";
 }
}
class Car extends Honda{
    function company(){
        echo "Maruthi";
     }
}
$car=new Car();
$car->company();
?>