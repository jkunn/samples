<?php

echo calculateDivision(15);

//echos "foo"

function calculateDivision($num)
{

    if(is_numeric($num))
    {        
        if($num % 3 == 0)
        {
            return 'foo';
        }
        elseif($num % 5 == 0)
        {
            return "bar";
        }
        elseif($num % 15 == 0)
        {
            return "foobar";
        }    
    }
    else
    {
        return "error: non numeric value input";
    }
}

?>