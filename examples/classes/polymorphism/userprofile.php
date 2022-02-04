<?php
class userprofile
{
    private $logger;

    function __construct(logger_interface $logger)
    {
        $this->logger->$logger;
    }

    public function create_user()
    {
        echo "Creating user. \n";
        $this->logger->log('User created.');
    }

    public function update_user()
    {
        echo "Updating user. \n";
        $this->logger->log('User updated.');
    }

    public function delete_user()
    {
        echo "Deleting user. \n";
        $this->logger->log('User deleted.');
    }
}
?>