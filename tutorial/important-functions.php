<?php include('../header.php'); ?>
DRY : DONT REPEAT YOURSELF

construction is not a mandatory function,
function with same may be exist in child and parent both the classes, but first prefrence is for function of child class.

access methods and properties inside a class and out side of class ( i.e. access by object )
inside class we use $this, parent::, self::, classname::
outside class we use object->, classname::

<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}
?>
The above example will output:
$this is defined (A)

<?php include('../footer.php'); ?>