<?php
setcookie("fruit", "apple", time()+(86400));
setcookie("color", "red", time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo "current cookie is". $_COOKIE['fruit'];
}else{
    echo "no cookies set";
}
echo "<br />";
if(isset($_COOKIE['fruit'])){
    echo "current color is". $_COOKIE['color'];
}else{
    echo "no color set";
}
print_r($_COOKIE);
?>