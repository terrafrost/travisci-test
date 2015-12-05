<?php
class test
{
    function __debugInfo()
    {
        return array('zzz' => 'zzz');
    }
}

$a = new test();
print_r($a);