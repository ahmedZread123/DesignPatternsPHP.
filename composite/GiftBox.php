<?php

namespace composite;

class GiftBox implements ProductInterface, GiftInterface
{
    private $price ; 
    private $giftPrice ; 

    public function __construct( $price ,$giftPrice )
    {
        $this->price =  $price;
        $this->giftPrice =  $giftPrice;
    }

    public function getPrice()
    {
      return $this->giftPackagePrice() + $this->price ; 
    }

    public function giftPackagePrice(){
        return $this->giftPrice ; 
    }

    
}
