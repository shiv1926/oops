<?php include('../header.php'); ?>
<p>Singleton Pattern</p>




<?php
/* THIS IS THE EXAMPLE OF SINGLETON PATTERN USING TRAITS */
trait Singleton
{
    private static $instance;

    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}

class DbReader extends ArrayObject
{
    use Singleton;
}

class  FileReader
{
    use Singleton;
}
?>
<?php include('../footer.php'); ?>