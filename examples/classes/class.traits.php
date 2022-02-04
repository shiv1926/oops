<?php
trait Trait1
{
    public function first()
    {
        return "This is first function in Trait1 \n";
    }
}

trait Trait2
{
    public function first()
    {
        return "This is first function in Trait2 \n";
    }
}

trait Trait3
{
    public function first()
    {
        return "This is first function in Trait3 \n";
    }
}

class class1
{
    use Trait1, Trait2, Trait3 {
        Trait1::first as Tfirst;
        Trait2::first as Tsecond;
        Trait3::first as Tthird;
        Trait1::first insteadof Trait2, Trait3;
    }
}

$obj1 = new class1();
echo $obj1->first();