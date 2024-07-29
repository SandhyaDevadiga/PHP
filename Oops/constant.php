<?php
class ConstantDemo{
    const collegeName="UVCE";
    function getConst(){
        echo self::collegeName;
    }
}
echo ConstantDemo::collegeName;
?>