<?php 
namespace Admin\BaseWd18407\Commons;

class Model
{   
    protected $conn;
    public function __construct()
    {
        
    }
    public function __destruct()
    {
        $this -> conn = null;
    }
}