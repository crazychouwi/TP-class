<?php
class Boisson{
  protected $brand;
  protected $color;
  public $ingredients;
  private $_price;


  public function getPrice(){
    return $this ->_price;
  }
  public function setPrice($price){
    $this->_price = $price;
  }

  public function getBrand(){
    return $this -> $brand;
  }
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function getColor(){
    return $this -> $color;
  }
  public function setColor($color){
    $this->color = $color;
  }

}
 ?>
