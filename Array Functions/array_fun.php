
<?php
//All ARRAY Functions 
    
 
//Push 
echo"push "."<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a)."<br>";
echo "<br><br>";

//Pop
echo"POP"."<br>";
$a=array("red","green","blue");
array_pop($a)."<br>";
print_r($a)."<br>";
echo "<br><br>";

//Unique
echo"unique"."<br>";
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a))."<br>";
echo "<br><br>";

//values
echo"values "."<br>";
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a))."<br>";
echo "<br><br>";

//Count
echo"Count "."<br>";
$cars=array("Volvo","BMW","Toyota");
echo count($cars)."<br>";
echo "<br><br>";

//List
echo"list "."<br>";
$my_array = array("Dog","Cat","Horse");
//echo "<br><br>";

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c."."<br>";
echo "<br><br>";



//Flip
echo"Flip "."<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
echo "<br><br>";


//Array Sorting Functions 
//sort
echo"sort"."<br>";
$cars=array("Volvo","BMW","Toyota");
sort($cars)."<br>";

foreach($cars as $x=>$x_name) {
  echo "keys=". $x .",car_name=". $x_name;
   echo "<br>";
}
echo "<br><br>";

//asort = > 
echo"asort "."<br>"; 
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
echo "<br><br>";

//arsort
echo"asort "."<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

//ksort
echo"ksort"."<br>";
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
echo "<br><br>";

//krsort
echo"krsort "."<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
echo "<br><br>";

?>
