<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    //

    public function index() {
        $items = Item::all();
        return view ('index', ['items' => $items]);
    }

    public function furnitureItem() {
        $items = Item::all()->where('category_id', 1);
        return view ('index', ['items' => $items]);
    }

    public function fnbItem() {
        $items = Item::all()->where('category_id', 2);
        return view ('index', ['items' => $items]);
    }

    public function electItem() {
        $items = Item::all()->where('category_id', 3);
        return view ('index', ['items' => $items]);
    }

    public function anyItem() {
        $items = Item::all()->where('category_id', 4);
        return view ('index', ['items' => $items]);
    }

    public function addItem() {
        $categories = Category::all();
        return view('add-item', compact('categories'));
    }

    public function editItem($id) {
        $item = Item::find($id);

        return view('edit-item', compact('item', 'id'));
    }

    public function createItem(Request $request) {
        Item::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'amount' => $request->amount
        ]);

        return redirect('/');
    }

    public function updateItem(Request $request, $id){
        $item = Item::find($id);

        $item->name = $request->name;
        $item->amount = $request->amount;
        $item->category_id= $request->category_id;

        $item->save();
        return redirect('/');
    }

    public function deleteItem($id){
        $item = Item::find($id);

        $item->delete();
        return redirect('/');
    }

}
