<?php

function tree($lines)
{
    for($i=1; $i<$lines; $i++)
    {
        if($i <= ($lines/2))
        {
            echo str_repeat('a', $i)."\n";
        }else{
            echo str_repeat('a', ($lines-$i))."\n";
        }
    }
}
tree(10);

?>