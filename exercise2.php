<?php

   class MyCircle{

    public $radius;
   


   function __construct(){

    	$this->radius=1;
    }


   public function __destruct(){}



  public  function getRadius(){
          return $this->radius;
    }


    public function setRadius($radius){

    	$this->radius=$radius;
    }

     public function getArea(){

       
       return $this->radius*2*3.1416;



     } 



   }


$obj=new MyCircle();
$obj2=new MyCircle();
   
echo $obj->getArea();
echo "<br>";
  
  $obj2->setRadius(4);
echo $obj2->getArea()



?>