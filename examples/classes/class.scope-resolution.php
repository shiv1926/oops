<?php
class Toys
{
    const CONTANT_VAR = 'I am constant';
    private static $toyShopName = 'Yadav Toys Store';

    private $toys = array(
        array('name'=>'Teddy Bear', 'category'=>'Soft Toys'),
        array('name'=>'Barbie Doll', 'category'=>'Soft Toys'),
        array('name'=>'Sofa', 'category'=>'Soft Toys'),
        array('name'=>'Chair', 'category'=>'Soft Toys'),

        array('name'=>'Gun', 'category'=>'Fun Toys'),
        array('name'=>'Animal Set', 'category'=>'Fun Toys'),
        array('name'=>'Kitchen Set', 'category'=>'Fun Toys'),

        array('name'=>'Ball', 'category'=>'Sport Toys'),
        array('name'=>'Cricket Set', 'category'=>'Sport Toys'),
        array('name'=>'Hockey Set', 'category'=>'Sport Toys'),
        array('name'=>'Gun', 'category'=>'Sport Toys'),

        array('name'=>'Train', 'category'=>'Remote Toys'),
        array('name'=>'Car', 'category'=>'Remote Toys'),
        array('name'=>'Plain', 'category'=>'Remote Toys'),
    );

    public function getToys()
    {
        $return='<table border="1" cellspacing="0" cellpadding="5" width="100%">';
        $return.='<tr><th>Name</th><th>Category</th></tr>';
        foreach($this->toys as $single_toy)
        {
            $return.='<tr><td>'.$single_toy['name'].'</td><td>'.$single_toy['category'].'</td></tr>';
        }
        $return.='</table>';
        return $return;
    }

    public function getToysByCategory($category)
    {
        return self::shopinfo();
    }

    public static function ShopInfo()
    {
        echo self::$toyShopName;
    }

    public static function getToysCategory($category)
    {

    }
}

$obj = new Toys();
//echo Toys::CONTANT_VAR;
echo $obj->getToysByCategory('a');
//Toys::ShopInfo();

class SoftToys Extends Toys
{
    function __construct()
    {
        echo parent::getToys();
    }
}

$soft_toys = new SoftToys();