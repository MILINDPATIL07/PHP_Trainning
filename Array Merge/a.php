<?php
$a=array("a"=>"sahil","b"=>"jaypal", array("c"=>"milind"));
echo"<pre>";
print_r($a);
echo"</pre>";
$b=array("d"=>"vishal");
$c=array_merge($a[0],$b);

foreach($a as $key=>$value)

{
    if(is_array($value))
    {
        $a[$key]=array_merge($value,$b);
    }
}

echo"<pre>";
print_r($a);
echo"</pre>";
?>