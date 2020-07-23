<?php
$room='V';
    $value = 0; $lastValue = 1000; $len = strlen($room);
    for ($i = 0; $i < $len; $i++)
{
        $rVal = 0;
        switch ($room[$i])
{
case 'I': $rVal = 1; break;
case 'V': $rVal = 5; break;
case 'X': $rVal = 10; break;
case 'L': $rVal = 50; break;
case 'C': $rVal = 100; break;
case 'D': $rVal = 500; break;
case 'M': $rVal = 1000; break;
        }
       
if ($lastValue < $rVal)
{ $value -= 2 * $lastValue; }

        $lastValue = $rVal;
        $value += $lastValue;
    }

    print_r('Конвертированное число:' . $value);
?>