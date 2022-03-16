<?php
namespace libs\system;
//namespace booststrap;
class Model
{
    protected $entityManager;
    public function __construct()
    {
        require_once "bootstrap.php";
        $this->entityManager=$entityManager;
    }
    
}

?>