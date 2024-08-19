<?php

class Product {
    public $id;
    public $name;
    public $image;
    public $price;
    public $quantity;

    public function __construct($id, $name, $image, $price, $quantity){
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}