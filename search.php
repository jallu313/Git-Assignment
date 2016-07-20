<?php

function search($search_key, $list) 
{

   for($i=0;$i<count($list);$i++)
    {
	if($list[$i]==$search_key)
         {
             return $i+1;
	 }
    }
}
$array1= array(10, 45, 42, 32, 46, 58, 90);
 print_r($array1);
 print_r(search(42,$array1));
echo "\n";
$array2= array(35, 48, 22, 45, 67, 42, 60);
print_r($array2);
print_r(search(42,$array2));
echo "\n";
$array3= array(12, 42, 39, 45, 89, 49, 99);
print_r($array3);
print_r(search(42,$array3));
echo "\n";
$array4= array(42, 65, 43, 87, 98, 54, 74, 86, 66, 63);
print_r($array4);
print_r(search(42,$array4));
?>
