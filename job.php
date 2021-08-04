Dear: <?php
$fname = $_GET["fname"];
$sname = $_GET["sname"];
$exp = $_GET["year"];
$fullname = $fname . " " . $sname;
echo $fullname;
?><br>
<?php
if ($exp < 10){
echo "Sorry you seems not capable for the vacancy";
}
else{
echo "Please wait for us to contact you";
}
?><br />
The notification Email will be sent to this Email address if there's any further contact:<?php
$email = $_GET["email"];
echo $email;
?>