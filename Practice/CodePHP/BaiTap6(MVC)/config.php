<?php
class connection
{
    private $server = "localhost";
    
    private $username = "root";
    
    private $password;
    
    private $db = "information";
    
    protected $conn;
    
    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "Connection Failed" . $e->getMessage();
        }
    }

}
