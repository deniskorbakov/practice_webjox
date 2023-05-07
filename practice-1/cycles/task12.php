<?php

function FloydsTriangle($n)
{
    $val = 1;
      
    for($i = 1; $i <= $n; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo $val . " ";
            $val++;
        }
        echo '<br>';
    }
}
  
FloydsTriangle(7);