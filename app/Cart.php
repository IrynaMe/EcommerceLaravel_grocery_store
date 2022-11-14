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

        public function add($item, $product_id)
        {
            $storedItem = ['qty' => 0, 'product_id' => 0, 'product_name' => $item->name, 'product_discount' => $item->discount,
        'product_price' => $item->price, 'product_image' => $item->image, 'item' =>$item];

            if ($this->items) {
                if (array_key_exists($product_id, $this->items)) {
                    $storedItem = $this->items[$product_id];
                }
            }

            $storedItem['qty']++;
            $storedItem['product_id'] = $product_id;
            $storedItem['product_name'] = $item->name;
            $storedItem['product_discount'] = $item->discount;
            // $storedItem['product_price'] = $item->price;
            $price=$item->discount>0?$item->discount:$item->price;
            $storedItem['product_price'] =$price;
            
            $storedItem['product_image'] = $item->image;
            $this->totalQty++;
            $this->totalPrice += $price;
            $this->items[$product_id] = $storedItem;
        }

        public function updateQty($id, $qty)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->items[$id]['product_price']=$this->items[$id]['product_discount']>0?$this->items[$id]['product_discount']:
            $this->items[$id]['product_price'];
            $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
            $this->items[$id]['qty'] = $qty;
            $this->totalQty += $qty;
            $this->totalPrice += $this->items[$id]['product_price'] * $qty;
        }

        public function removeItem($id)
        {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
            unset($this->items[$id]);
        }
    }
