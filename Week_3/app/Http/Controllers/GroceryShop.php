<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GroceryShop extends Controller
{
    public function getitems(){
        // $items=\App\Models\Item::all();
        // $items=Item::select('name','price')->get();
        // $items=Item::where('price','>',50)->where('quantity','=',35)->get();
        // $items=Item::orderBy('price','desc')->get();
        // $items=Item::orderBy('price','asc')->get();
        // $items=Item::orderBy('name','asc')->get();

        // return view('groceryshop', compact('items'));

        // $count=Item::count();
        // return "Total Items in my db $count";

        // $max=Item::max('price');
        // return "maximum price of the items is $max";

        // $items=Item::whereNot('price',50)->whereNot('name','tomato')->get();
        // $items=item::wherePrice(50)->get();
        // return $items;



        // return view('groceryshop',compact('items'));
        // $items = Item::all();
        // return view('items', compact('items'));
        // $items = Item::all();
        // return $items;
        // return "Fetch the items from the database";
    }
}
