<html>
<link href="style.css" rel="stylesheet" type="text/css" />
</html>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<h1>";
echo "CONGRATS!";
echo "</h1>";

echo "<h2>";
echo "Welcome valued customer and thank you for your business!";
echo "</h2>";

echo "<br>";
$password = $_POST['password'];
echo "Password: ". $password;



$fives = $_POST['fives'];
$shakes = $_POST['shakes'];
$hugs = $_POST['hugs'];
$shipping = $_POST['shipping'];
$shipCost = 0;
if($shipping == "Five Day"){
  $shipCost = 0;
}
else if($shipping == "Two Day"){
  $shipCost = 7;
}
else{
  $shipCost = 15;
}

echo "<table>";
echo "<th>". "" ."</th>";
echo "<th>". "Quantity" ."</th>";
echo "<th>". "Cost Per Item" ."</th>";
echo "<th>". "Sub Total" ."</th>";

echo "<tr>";
echo "<th>". "Crisp High-Five" . "</th>";
echo "<td align='center'>" . $fives . "</td>";
echo "<td align='center'>" . "$3" . "</td>";
echo "<td align='center'>" . "$" . $fives*3 . "</td>";
$sub1 = $fives*3;

echo "<tr>";
echo "<th>". "Firm Hand Shake" . "</th>";
echo "<td align='center'>" . $shakes . "</td>";
echo "<td align='center'>" . "$7" . "</td>";
echo "<td align='center'>" . "$" . $shakes*7 . "</td>";
$sub2 = $shakes*7;

echo "<tr>";
echo "<th>". "Warm Bear Hug" . "</th>";
echo "<td align='center'>" . $hugs . "</td>";
echo "<td align='center'>" . "$15" . "</td>";
echo "<td align='center'>" . "$" . $hugs*15 . "</td>";
$sub3 = $hugs*15;

echo "<tr>";
echo "<th>". "Shipping" . "</th>";
echo "<td align='center'>" . $shipping . "</td>";
echo "<td align='center'>" . "" . "</td>";
echo "<td align='center'>" . "$" . $shipCost . "</td>";

echo "<tr>";
echo "<th>". "Total Cost" . "</th>";
echo "<td align='center'>" . "" . "</td>";
echo "<td align='center'>" . "" . "</td>";
echo "<td align='center'>" . "$" . ($sub1+$sub2+$sub3+$shipCost) . "</td>";
echo "</table>";
echo "</body>";
?>
