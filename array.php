<!DOCTYPE html>
<html>
<body>

<h3>Pets array</h3>
<?php
$pets = array("dog", "cat", "fish", "bird", "iguana"); 
echo "You can adopt a  " . $pets[0] . ", a " . $pets[1] . " or a " . $pets[3] . " from the animal sanctuary.";
?>
	
<h3>The state and state capital</h3>
<?php
$statecaps = array("Washington => Olympia", "Oregon => Salem", "California => Sacramento", "Alaska => Juneau", "Hawaii => Honolulu", "Idaho => Boise", "Nevada => Carson City", "Arizona => Phoenix");
//Sort array by first alphabet
sort($statecaps);
foreach($statecaps as $i => $i_value) {
    echo  "The state and state capital: " . $i_value;
    echo "<br>";
}
?>

<h3>Insert a new item</h3>
<?php
$a=array("1, 2, 3, 4,");
$b=array("5, 6");
	
//use array_push to insert a new item
array_push($a,"42",$b);
print_r($a);
?>

<h3>Calculate temperature</h3>
<?php
$temp = array("32", "47", "55", "30", "42", "39", "45");
 
 //Add the values to the array
 $sum = array_sum($temp); 
 //Count the items
 $count = count($temp);
 //Find the average
 $average = ($sum/$count); 
 //Sort array from low to high
 sort($temp);
 
 echo "The average temperature is : ".round($average)."&deg";
 echo  "<br/>The lowest temp is : " . $temp[0]."&deg";
 echo  "<br/>The highest temp is : " . $temp[6]."&deg";
 
 ?>



</body>
</html>
