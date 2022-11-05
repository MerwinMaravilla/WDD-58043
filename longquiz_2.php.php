<html>
<head> 
<title> Laboratory Activity</title> 
</head>
<body bgcolor=black>
<font color=white>
<?php
echo "<b>Long Quiz</b><br>";
print "Today’s date and time is <br>";
date_default_timezone_set('Asia/Singapore');
echo date('M d Y, h:i:sa');
print "<br><br>";
print "Hello, I am ";
$name = "Merwin Joseph Maravilla";
$un = strtoupper($name);
print "$un.<br>";
print "<br><br>";
$salary_rate = 600;
$salary = $salary_rate * 15;
$tax = 0.30 * $salary;


/*CALCULATIONS */
$net_pay = $salary - $tax;

echo "Net Pay = $net_pay <br>";


?>
</body>
</html>