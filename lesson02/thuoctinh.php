<?php
class People{
    var $ten;
    var $tuoi;
    var $quequan;

    function an(){
        echo "Toi dang an";
    }
    function ngu(){
        echo "Toi dang ngu";
    }
    function diChuyen(){
        echo "Toi dang di chuyen";
    }
}
class Student extends People{
    var $masv;
    var $nganh;

    function dihoc(){}
    function hoclai(){}
    function diChuyen(){
        echo "Toi dang di chuyen bang cach di bo";
    }
}
class Staff extends People{   
    var $manv;
    var $vitri;

    function dilam(){}
    function duoiviec(){}
    function diChuyen(){
        echo "Toi dang di chuyen bang xe may";
    }
}
class Security extends Staff{
    function diChuyen(){
        echo "Toi dang di chuyen bang xe bus";
    }
}

$hoang = new Security();
$hoang->diChuyen();

?>