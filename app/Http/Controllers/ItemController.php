<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //

    public function index() {

        $items = Item::all();

        return view ('index', ['items' => $items]);
    }

    public function addItem() {
        return view('add-item');
    }

    public function editItem() {
        return view('edit-item');
    }

    public function createItem(Request $request) {
        Item::create([
            'name' => $request->name,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }


}
