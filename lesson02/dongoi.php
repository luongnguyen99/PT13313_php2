<?php
class People{
    public $ten;
    protected $tuoi;
    private $quequan;

    public function ngu(){
        echo "Toi dang ngu";


        $this->an();
    }
    protected function diChuyen(){
        echo "Toi dang di chuyen";
    }
    
    private function an(){
        $this->ten = "Can Pham Quoc";
        $this->quequan = "ha noi";
        echo "toi dang an com";
    }

    function getTuoi(){
        return $this->quequan;
    }
}
class Student extends People{

    function __construct(){
        $this->ten = "Hoang DM in child";
    }

    public function getProValue(){
        $this->diChuyen();
    }

    
}
$model = new Student();
$model->getProValue();

?>