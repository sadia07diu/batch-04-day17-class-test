<?php


namespace App\classes;



class FullName
{
    public $firstName;
    public $lastName;

    public function __construct($data=null)
    {
//        print_r($data);
//        echo $data["firstName"];
//        exit();
        if($data)
        {
            $this->firstName = $data["firstName"];
            $this->lastName = $data["lastName"];
        }
    }

    public function index()
    {


        $_GET["pages"] ="full-name";
        header("Location: action.php?pages=full-name");
    }
    public function getFullName(){
        $this->fullName = $this->firstName.$this->lastName;

        return $this->fullName;
    }

}