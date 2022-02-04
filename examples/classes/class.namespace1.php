<?php
namespace abc
{
    class xyz 
    {
        function __construct()
        {
            echo "This is xyz class in abc namespace.<br>";
        }
    }
    $xyz = new xyz();
}

namespace def
{
    class xyz 
    {
        function __construct()
        {
            echo 'This is xyz class in def namespace.<br>';
        }
    }
    $xyz = new xyz();
    use abc\xyz as aaa;
    $obj1 = new aaa();
}

namespace {
    $obj1 = new abc\xyz();
}