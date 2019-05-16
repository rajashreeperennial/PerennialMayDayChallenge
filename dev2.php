// php dev2.php

function equilibrium($arr, $n) 
{
    for ($i = 0; $i < $n; ++$i)  
    {
        $leftsum = 0;
        for ($j = 0; $j < $i; $j++)
            $leftsum += $arr[$j];

        /* get right sum */
        $rightsum = 0;
        for ($j = $i + 1; $j < $n; $j++)
            $rightsum += $arr[$j];
        
        if ($leftsum == $rightsum)
            return $i;
    }
    return -1; 
}

$arr = array( -7, 1, 5, 2, -4, 3, 0 );
$arr_size = count($arr);
echo equilibrium($arr, $arr_size); 
