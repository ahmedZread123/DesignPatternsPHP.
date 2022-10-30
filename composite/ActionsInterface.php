<?php 

namespace composite;

interface ActionsInterface
{
    public function addProduct(ProductInterface $product) ;
    public function removeProduct(ProductInterface $product) ;
}