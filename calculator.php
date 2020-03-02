<html>
<head>
	<title>A basic arithmetic operations calculator</title>
</head>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calculate = $_POST['calculate'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($calculate) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}
 
?>
 
<body>
    <div id="page-wrap">
	<h2>A basic arithmetic calculator</h2>
	  <form action="" method="post">
            <p>
                <input type="text" placeholder="number1" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" />
            </p>
            <p>
                <input type="text" placeholder="number2" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" />
            </p>
            <input type="submit" name="calculate" value="Add" />
            <input type="submit" name="calculate" value="Subtract" />
            <input type="submit" name="calculate" value="Multiply" />
            <input type="submit" name="calculate" value="Divide" />
          <p>
                <input readonly="readonly" placeholder="result" name="result" value="<?php echo $result; ?>"> 
            </p>
	  </form>
    </div>
</body>
</html>
