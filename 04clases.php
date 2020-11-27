<?php 
    declare(strict_types = 1);

    class MobileDevice {
        public $brand;
        public $model;
        public $color;

        public function __construct(string $brand,string $model, string $color){
            $this->brand = $brand;
            $this->model = $model;
            $this->color = $color;
        }

        public function turnOn() : void {
            print print sprintf("%s %s is running 🚀",$this->brand,$this->model);
        }

        public function makeCall(string $phoneNumber) : void {
            print sprintf("\n%s call to %s",$this->brand,$phoneNumber);
        }
    }

    // $obj = new MobileDevice();
    // $obj->brand = "Iphone";
    // $obj->model = "IOS 12";
    // $obj->color = "red";

    $obj1 = new MobileDevice("Iphone","IOS 12","red");
    $obj2 = new MobileDevice("Xiaomi","Redmi 9","blue");

    var_dump($obj1);
    var_dump($obj2);
    // $obj->turnOn();
    // $obj->makeCall("922924500");