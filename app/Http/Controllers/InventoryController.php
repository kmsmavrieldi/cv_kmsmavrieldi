<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inventory::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->stock = $request->stock;
        $inventory->save();
        
        return response()->json([
            'name' => $inventory->name,
            'price' => $inventory->price,
            'stock' => $inventory->stock,
            'result' => 'Inventory Stored'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inventory::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Ill$ide
     */
    public function update(Request $request, $id)
    {

        $inventory = Inventory::find($id);
        $inventory->name = $request->name;
        $inventory->price = $request->price;
        $inventory->stock = $request->stock;
        $inventory->save();

         return response()->json([
             'name' => $inventory->name,
             'price' => $inventory->price,
             'stock' => $inventory->stock,
             'result' => 'Inventory updated'
         ]);    
    }

    public function purchase(Request $request, $id)
    {
        $inventory = Inventory::find($id);
        $inventory->stock = $inventory->stock + 1;
        $inventory->save();

        return response()->json([
            'id' => $inventory->id,
            'name' => $inventory->name,
            'stock' => $inventory->stock,
            'result' => 'Stok Inventory bertambah 1'
        ]);    

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('tes');
        $inventory = Inventory::find($id);
        $inventory->delete();

        return response()->json([
            'name' => $inventory->name,
            'price' => $inventory->price,
            'stock' => $inventory->stock,
            'result' => 'Inventory deleted'
        ]);    

    }
}
