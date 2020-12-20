<?php

namespace App;

class Cart 
{
    public $flowers = null;
    public $tQty =0;
    public $tPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->flowers = $oldCart->flowers;
            $this->tQty = $oldCart->tQty;
            $this->tPrice = $oldCart->tPrice;
        }
    }
    public function add($flower, $id, $qty){
        $storedFlower = ['qty' => 0,'price' => $flower->flowerprice, 'flower' => $flower];
        if($this->flowers){
            if(array_key_exists($id, $this->flowers)){
                $storedFlower = $this->flowers[$id];
            }

        }

        $storedFlower['qty']+=$qty;
        $storedFlower['price'] = $storedFlower['qty'] *$flower->flowerprice;
        $this->flowers[$id] = $storedFlower;
        $this->tQty++;
        $this->tPrice = $this->tPrice + $flower->flowerprice;
    }
    public function update($flower, $id, $qty){
        $storedFlower = ['qty' => 0,'price' => $flower->flowerprice, 'flower' => $flower];
        if($this->flowers){
            if(array_key_exists($id, $this->flowers)){
                $storedFlower = $this->flowers[$id];
            }

        }

        $storedFlower['qty']=$qty;
        $storedFlower['price'] = $storedFlower['qty'] *$flower->flowerprice;
        $this->flowers[$id] = $storedFlower;
        $this->tQty++;
        $this->tPrice = $this->tPrice + $flower->flowerprice;
    }
}
