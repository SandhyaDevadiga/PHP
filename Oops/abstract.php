<?php
abstract class Product{
    abstract function Details();
    abstract function Images();
}
class Upload extends Product{
    function Details(){
        echo "Details added";
    }
    function Images(){
        echo "image uploaded";
    }
}
$u=new Upload();
$u->Details();
?>