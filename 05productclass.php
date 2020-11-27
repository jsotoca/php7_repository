<?php
    declare(strict_types = 1);

    class Product {
        private $name;
        private $price;

        public function __construct(string $name,float $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function getName() : string {
            return $this->name;
        }

        public function setName(string $name) : void {
            $this->name = $name;
        }

        public function getPrice() : float {
            return $this->price;
        }

        public function setPrice(float $price) : void {
            $this->price = $price;
        }
    }

    $obj = new Product("Guitar",1299.00);
    var_dump($obj);
    $obj->setName("Violin");
    $obj->setPrice(599.99);
    var_dump($obj);