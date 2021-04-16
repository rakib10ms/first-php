<!DOCTYPE html>
<html>
<head>
<title>first php project</title>
<link rel="stylesheet" href="style.css">

</head>
<body>



<?php
function myCalculator($num01,$oper,$num02){
	
   $sum;
   switch($oper)
   {
   case "add":
   $sum=$num01+$num02;
   break;
   case "sub":
   $sum=$num01-$num02;
   break;

   default:
   $sum="There was an error !";
   break;
}
  return $sum;

}

$num01=$_POST['num01'];
$oper=$_POST['oper'];
$num02=$_POST['num02'];

$result=myCalculator($num01,$oper,$num02) ;

echo " <h1 class='styles'>Your Calculate Value is " .$result . "</h1>";

?>
</body>
</html>
