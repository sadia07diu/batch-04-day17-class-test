<?php


namespace App\classes;





class Example
{
    public $name;
    public $data =[];

    public function index()
    {




        $this->data = [
            0=>[
                "name" => "sagor",
                "email" => "sagor.fege35.com",
                "mobile" => [
                    "personal"=> "046476757",
                    "guardian"=> "645758"
                ],
            ],
            1=>[
                "name" => "sagorhfhfr",
                "email" => "sagor.fege35.com",
                "mobile" => [
                    "personal"=> "046476757",
                    "guardian"=> "645758"
                ],
            ],
            2=>[
                "name" => "sagorfrjygtkjj",
                "email" => "sagor.fege35.com",
                "mobile" => [
                    "personal"=> "046476757",
                    "guardian"=> "645758"
                ],

            ],
            3=> "bitm",
            4=> [
                "name" => "abc",
                "email" => "sabcdem",
                "mobile"=> "08575"
            ]


        ];
//        foreach ($this->data as $item){
//            if (is_array($item)){
//                foreach ($item as $value){
//                    if(is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value." ";
//                        }
//                    }
//                    else{
//                        echo $value." ";
//                    }
//
//                }
//            }
//            else{
//                echo $item;
//            }
//
//            echo "<br/>";
//
//        }
//        echo "<pre>";
////        print_r($this->data);
//        var_dump($this->data);




        }






}
//for ($this->i =35; $this->i >= 23; $this->i--)
//        {
//            echo $this->i. "<br/>";
//        }
//        $this->i = 10;
//        while ($this->i < 20)
//        {
//            echo $this->i ."<br/>";
//            $this->i++;
//        }

//        $this->i =10;
//        do{
//            echo $this->i."<br/>";
//            $this->i++;
//
//        }while($this->i <20);
//        $this->name = "bitm";
//        $this->name = "Basis";
//        echo $this->name;

//$this->data = [10,20,30,"basis",100.20,true];
//////        echo $this->data[4];
//        foreach($this->data as $key=> $item){
//            echo $key." ". $item."<br/>";