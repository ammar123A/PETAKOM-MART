<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vendor_Controller extends Controller
{
    public function index()
    {
        $vendor_data = \App\Models\Vendor_Model::all();
        return view('Manage_Vendor.Admin_vendorTable', ['vendor_data' => $vendor_data]);
    }

    public function create(Request $request)
    {
        \App\Models\Vendor_Model::create($request->all());
        return redirect('vendor')->with('success','New Data Insert');
    }

    public function read($id)
    {
        $vendor_data = \App\Models\Vendor_Model::find($id);
        return view('Manage_Vendor.Admin_editvendorTable',['vendor_data'=> $vendor_data]);
    }

    public function readd($id)
    {
        $vendor_data = \App\Models\Vendor_Model::find($id);
        return view('Manage_Vendor.Admin_deletevendorTable',['vendor_data'=> $vendor_data]);
    }

    public function destroy($id){
        $vendor_data = \App\Models\Vendor_Model::find($id);
        $vendor_data->delete($vendor_data);
        return redirect('vendor')->with('success','Data has been Deleted');
    }
}
