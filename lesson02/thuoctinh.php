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
}
class Staff extends People{   
    var $manv;
    var $vitri;

    function dilam(){}
    function duoiviec(){}
}
class Security extends Staff{}

$hoang = new Security();
$hoang->diChuyen();

?>