<?php
// dinh nghia ra doi tuong (kieu du lieu)
class Animal{
    // dinh nghia thuoc tinh
    // var $name;
    // var $age;
    // var $hairColor;
    const TEST = 'somewhere';
    function sayHello(){
        echo "Hello " . $this->name;
        $this->run();
    }
    function run (){
        echo "<br> Im running";
    }
}

class Duck{
    const TEST = 'someone';
}

echo Duck::TEST;

// tao ra 1 thuc the thuoc kieu du lieu 
$dog = new Animal();
// gan gia tri cho thuoc tinh
$dog->name = 'Rex';
$dog->weight = 30;
$dog->sayHello();


$cat = new Animal();
$cat->name = 'Tom Cruise';
// $cat['name'] = "Tom Raider";
// var_dump($dog);
// var_dump($cat);
$cat->sayHello();




?>