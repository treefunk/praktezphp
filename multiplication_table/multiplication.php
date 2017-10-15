<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication table</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>wId C0d3 MULtipLic@tion T@bl3</h1>
<table>
<?php
echo "<tr>";
for($d = 0 ; $d <= 12; $d++){
    
    if($d == 0){
        echo "<th>&nbsp</th>";
    }
    else{
        echo "<th>$d</th>";
    }
}
echo "</tr>";
for($i = 1 ; $i <= 12 ; $i++)
{
    echo "<tr>";
    $y = 0;
    while($y < 12){
        if($y == 0){
            echo "<th>".($y+1)*$i."</th>";
        }
        echo "<td>".($y+1)*$i."</td>";
        $y++;
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
