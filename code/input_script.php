<?php
$sprint1=$_POST['sprint'];
$rname1=$_POST['rname'];
$month1=$_POST['month'];
$eff=$_POST['effort1'];
$eff1=$_POST['effort2'];
$leave=$_POST['leave'];
$data=$sprint1.",".$rname1.",".$month1.",".$eff.",".$eff1.",".$leave;
$file="file.xlsx";
file_put_contents($file, $data.PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your email address!</h1>";


?>
<html>
<head>
<title>ThankYou Page</title>    
</head>
<body>
<h1><a href="Inputform.html">GO BACK</a> </h1>    
    
</body>
</html>