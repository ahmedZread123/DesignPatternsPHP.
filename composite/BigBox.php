<?php 

namespace composite ;

class BigBox implements ProductInterface , ActionsInterface
{
    /** 
     * @var ProductInterface[]
     */
    private $products ; 

    public function __construct(array $products)
    {
        $this->products = $products ; 
    }

    public function getPrice(){
      $totalPrice  = 0; 
      foreach($this->products as $product){
        $totalPrice += $product->getPrice() ;
      }
    }
    public function addProduct(ProductInterface $product) {
        $this->products[] =  $product ;
    }
    public function removeProduct(ProductInterface $product) {
      unset(  $this->products[$product])  ;
    }






}