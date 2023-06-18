<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
   public function index()
   {
      $data_inventory = \App\Models\InventoryModel::all();
      return view('Manage_Inventory.ViewInventory', ['data_inventory' => $data_inventory]);
   }

   public function create(Request $request)
   {
      \App\Models\InventoryModel::create($request->all());
      return redirect('/datainventory')->with('success', 'Data is Added');
   }

   public function edit($id)
   {
      $data_inventory = \App\Models\InventoryModel::find($id);
      return view('Manage_Inventory.UpdateInventory', ['data_inventory' => $data_inventory]);
   }

   public function update(Request $request, $id)
   {
      $data_inventory = \App\Models\InventoryModel::find($id);
      $data_inventory->update($request->all());
      return redirect('/datainventory')->with('success', 'Data is Updated');
   }

   public function delete($id)
   {
      $data_inventory = \App\Models\InventoryModel::find($id);
      $data_inventory->delete($data_inventory);
      return redirect('/datainventory')->with('success', 'Data is deleted');
   }
}