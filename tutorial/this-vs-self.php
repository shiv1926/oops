<?php include('../header.php'); ?>
<h2>This VS Self</h2>
https://phppot.com/php/php-self-vs-this/

public static function getInstance() {
    if (!(self::$instance instanceof self)) {
        self::$instance = new self;
    }
    return self::$instance;
}

read this function, it is used to create singleton pattern, using self keyword.

<?php include('../footer.php'); ?>