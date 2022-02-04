<?php
include_once('logger-interface.php');
class db_logger implements logger_interface
{
    public function log($message)
    {
        echo 'Logging message to email '.$message;
    }
}
?>