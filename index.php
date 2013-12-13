<?php
if(!isset($_POST["bd"]))
{
$bd = '1/15/1929';
$yd =  "Martin Luther King, Jr was born on a " . date('l', strtotime($bd));
}
else
{
$bd = $_POST['bd'];
$yd =  "This person was born on a " . date('l', strtotime($bd));
}
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Day Born</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<style>
.ui-header .ui-title, .ui-footer .ui-title {
margin-right: 0 !important; margin-left: 0 !important;
}
</style>
</head>
<body>
<!-- First Page -->
<form action="day_born.php" method="post">
<div data-role="page" data-theme='e'>
<div data-role="header" data-theme='e'>
<h1>Find a day someone was born</h1>
</div>
<br><br>
 Born on : <input type="text" name="bd" value="<?php echo $bd ?>"><br>
 Day was : <input type="text" name="yourday" value="<?php echo $yd ?>"><br>
<input type="Submit" name="submit" value="Submit">
</div>
</form>


</body>
</html>






