<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(57, 5, 16, 9, 92, 37);
sort($numbers);
echo "The order of the numbers is:<br/>";
$numlength = count($numbers);
for($i = 0; $i < $numlength; $i++) {
    
    echo $numbers[$i];
    echo "<br/>";
}
?>

</body>
</html>
