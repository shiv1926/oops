<?php
class superClass
{
    function __call($fn_name, $params)
    {
        if($fn_name=='count_params')
        {
            switch(count($params))
            {
                case 1 : 
                    return '1 parameter';
                    break;
                case 2 : 
                    return '2 parameter';
                    break;
                case 3 : 
                    return '3 parameter';
                    break;
            }
        }
    }
}
$obj = new superClass();
echo $obj->count_params('a'); // it will show '1 parameter'
echo $obj->count_params('a','b'); // it will show '2 parameter'
echo $obj->count_params('a','b','c'); // it will show '3 parameter'