<?php

$array = [
	["id"=>1,"name"=>"Safiull Alam","Roll"=>349132,"Reg"=>251587],
	["id"=>2,"name"=>"Kawsar Islam","Roll"=>349133,"Reg"=>251588],
	["id"=>3,"name"=>"Robiul Hossain","Roll"=>349134,"Reg"=>251589],
	["id"=>4,"name"=>"Sharif","Roll"=>349135,"Reg"=>251590],
	["id"=>5,"name"=>"Bakul","Roll"=>349136,"Reg"=>251591]

];

//this is for single array.
function GetDataFromSingleArray($val,$key){
	echo "<tr>";
	echo "<th>".ucfirst($key)."</td><td>$val</td>";
	echo "</tr>";
}

echo "<table border='1'>";
array_walk($array[0], "GetDataFromSingleArray");
echo "</table>";


echo "<br>";
echo "<br>";
echo "<br>";

//this is for nested array.
function CreateHeader($val,$key){
	echo "<th>".ucfirst($key)."</td>";
}

function GetItem($item,$key){
	echo "<td>$item</td>";
}

function GetRow($val,$key){
	echo "<tr>";
		array_walk($val,"GetItem");
	echo "</tr>";
}




echo "<table border='1'>";

array_walk($array[0], "CreateHeader");
array_walk($array, "GetRow");

echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
<style>
.customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
</body>
</html>
