<?php
function fibonacci($p,$c,$f,$limit)
{
  while($limit>0)
   {
     echo $f;
     echo " ,";
     $p=$c;
     $c=$f;
     $f=$p+$c;
     $limit--;
  }
}
print_r(fibonacci(0,1,0,8));

