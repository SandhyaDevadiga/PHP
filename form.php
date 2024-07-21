
<?php
print_r($_POST);
echo "<br />";
if(isset($_POST['name'])){
    echo "User name is" .$_POST['name'];
    echo "<br />";
    echo "User email is" .$_POST['email'];
    echo "<br />";
    echo "User skill is" .$_POST['skills[]'];
    echo "<br />";
    echo "User gender is" .implode(",", $_POST['skills']);
    echo "<br />";
  
}
?>