Dear: <?php
$fname = $_GET["fname"];
$sname = $_GET["sname"];

$fullname = $fname . " " . $sname;
echo $fullname;
?><br>
Your contact no is: <?php
$number = $_GET["phone"];
echo $number;
?><br />
Your email address is: <?php
$email = $_GET["email"];
echo $email;
?>