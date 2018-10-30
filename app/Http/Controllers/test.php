<?php

namespace App\Http\Controllers;

use App\Order;
use App\Productitem;
use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function addproduct(){
        $order = new Order();
        $order->order_date="2018-01-01";
        $order->save();

        $item1 = new Productitem();
        $item1->name="tropico";
        $item1->description="jus";
        $item1->order_id= $order->id;
        $item1->save();

        $productitem2 = new Productitem();
        $productitem2->name="oh";
        $productitem2->description="jus";
        $productitem2->order_id=$order->id;
        $productitem2->save();
        echo "saved";
        echo "<br/>";
        echo $order;
        echo "<br/>";
        echo $order->productitems;
        echo "<br/>";
        return view('addproduct');
    }
}
