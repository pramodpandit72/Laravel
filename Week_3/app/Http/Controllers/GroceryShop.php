<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GroceryShop extends Controller
{
    public function getitems(){
        // $items = Item::all();
        // return view('items', compact('items'));
        $items = Item::all();
        // return $items;
        // return "Fetch the items from the database";
    }
}
