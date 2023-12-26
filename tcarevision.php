<?php
    $myArr = [1, 2, 3, 4, 5, 6, 7, 8];
    
    function reverseArray($array)
    {
        return array_reverse($array);
    }

    print_r(reverseArray($myArr));

    // q3
    function filterEvenNumber($array)
    {
        $evenNum = [];
        foreach($array as $num)
        {
            if ($num % 2 == 0)
            {
                array_push($evenNum, $num);
            }
        }
        return $evenNum;
    }

    print_r(filterEvenNumber($myArr));

    //q4
    $numbers = [2,5,8,11,14];
    for ($i = 0; $i<count($numbers); $i++)
    {
        echo $numbers[$i]*3;
    }
?>