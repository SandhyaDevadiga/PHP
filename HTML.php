<html>
    <head>
        <title>Table</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>SEmail</td>
            </tr>
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>SEmail</td>
            </tr>
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>SEmail</td>
            </tr>
        </table>
    </body>
</html>

<?php 
$users=[
    [1, "anil", "anil@test.com"],
    [2, "sam", "sam@test.com"],
    [3, "peter", "peter@test.com"],
    [4, "tony", "tony@test.com"],
];
echo "<table border=1>";
for($i=0; $i<count($users); $i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]); $j++){
       echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>"
?>