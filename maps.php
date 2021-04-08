<!Doctype html>
<html>
<head>
<title>Locate Maps</title>
<meta charset="utf-8">
<meta content="width-device-width, initial-scale-1, maximum-scale-1, user-scale=no" name="viewport">
<link href="style.css" rel="stylesheet" media = "screen">
</head>
<body>
<div class="map__container">
<h1>Maps</h1>
<?php
if (isset($_POST["submit_adddress"]))
{
$address = $_POST["address"];
$address = str_replace(" ","+", $address);
?>
<iframe width="800" height="600" src = "https://maps.google.com/maps?q=<?php 
echo $address; 
?>&output=embed"></iframe>

<?php

}

?>

<form method="POST">
<p><input type="text" name="address" placeholder="Enter Address"></p>
<input type="submit" name="submit_adddress">
</form>
</div>

</body>





</html>