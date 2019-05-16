<?php

// php dev3.php

function spiralMatrix($m, $n, $a)
{
    $l = 0;
    $k = 0;
    $l = 0;

    while ($k < $m && $l < $n)
    {
        for ($i = $l; $i < $n; ++$i)
        {
            echo $a[$k][$i]." ";
        }
        $k++;

        
        for ($i = $k; $i < $m; ++$i)
        {
            echo $a[$i][$n-1]." ";
        }
        $n--;

       
        if ( $k < $m)
        {
            for ($i = $n-1; $i >= $l; --$i)
            {
                echo $a[$m-1][$i]." ";
            }
            $m--;
        }

      
        if ($l < $n)
        {
            for ($i = $m-1; $i >= $k; --$i)
            {
                echo $a[$i][$l]." ";
            }
            $l++;
        }
    }
}

$a= array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12)
);

spiralMatrix(3, 4, $a);
