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

    public function editItem($id) {
        $item = Item::find($id);
        return view('edit-item', compact('item', 'id'));
    }

    public function createItem(Request $request) {
        Item::create([
            'name' => $request->name,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }

    public function updateItem(Request $request, $id){
        $item = Item::find($id);

        $item->name = $request->name;
        $item->amount = $request->amount;

        $item->save();
        return redirect('/');
    }

    public function deleteItem($id){
        $item = Item::find($id);

        $item->delete();
        return redirect('/');
    }

}
