<?php
class Company{
    function getName(){
        echo "This is UVCe";
        // here it ends with $this 
        return $this;
    }
    function getEmp(){
        echo "This is Student";
        return $this;
    }
    function getTotal(){
        echo "This is Total";  
    }
}
$c1=new Company();
$c1->getName()->getEmp()->getTotal();
?>