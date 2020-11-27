<?php 
    declare(strict_types = 1);

    class MobileDevice {
        public $brand;
        public $model;
        public $color;

        public function turnOn() : void {
            print print sprintf("%s %s is running 🚀",$this->brand,$this->model);
        }

        public function makeCall(string $phoneNumber) : void {
            print sprintf("\n%s call to %s",$this->brand,$phoneNumber);
        }
    }

    $obj = new MobileDevice();
    $obj->brand = "Iphone";
    $obj->model = "IOS 12";
    $obj->color = "red";

    var_dump($obj);
    $obj->turnOn();
    $obj->makeCall("922924500");