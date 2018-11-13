<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) {
        // for qty of item
        // $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        // for NO qty of item
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        // for qty of item
        // $storedItem['qty']++;
        // $storedItem['price'] = $item->price * $storedItem['qty'];

        // for NO qty of item
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    // + & - qty of one item
    // public function reduceByOne($id) {
    //     $this->items[$id]['qty']--;
    //     $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
    //     $this->totalQty--;
    //     $this->totalPrice -= $this->items[$id]['item']['price'];

    //     if ($this->items[$id]['qty'] <= 0) {
    //         unset($this->items[$id]);
    //     }
    // }

    // public function IncreaseByOne($id) {
    //     $this->items[$id]['qty']++;
    //     $this->items[$id]['price'] += $this->items[$id]['item']['price'];
    //     $this->totalQty++;
    //     $this->totalPrice += $this->items[$id]['item']['price'];

    //     if ($this->items[$id]['qty'] <= 0) {
    //         unset($this->items[$id]);
    //     }
    // }

    public function removeItem($id) {
        // for qty of item
        // $this->totalQty -= $this->items[$id]['qty'];

        // for NO qty of item
        $this->totalQty -= 1;

        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }

    // public function presentIngredientsIDs(){
    // return dd(($this->items));

    // $ids = [];

    // for ($i=0; $i < 100 ; $i++) {
    //     $i=70;
    //     if (array_key_exists($i, $this->items)) {
    //         $ids = $this->items[$i]['item']['id'];
    //     }
    //     return dd($ids);
    // }
    //     // return $this->items;
    // }



    public function presentIngredientsIDs(){
        // return dd(($this->items));
        $ids = [];
        
        for ($i=0; $i < 100 ; $i++) {
            if (array_key_exists($i, $this->items)) {
                array_push( $ids, $this->items[$i]['item']['id'] );
            }
        }
        
        return $ids;
    }
}
