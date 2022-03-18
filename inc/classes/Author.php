<?php 

class Author 
{
    public $name;
    public $firstname;


    public function __construct($name = '', $firstname = '')
     {
        $this->name = $name;
        $this->firstname = $firstname;

     }
}
