<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Custormer;
use Auth;

class CustormerController extends Controller
{
    public function view(){

   	$allData = Custormer::all();

   	return view('backend.customer.view-customer', compact('allData'));
   }

   public function add(){

   	return view('backend.customer.add-customer');
   }

   public function store(Request $request){
   	$customer = new Custormer();
   	$customer->name = $request->name;
   	$customer->mobile_no = $request->mobile_no;
   	$customer->email = $request->email;
   	$customer->address = $request->address;
   	$customer->created_by =Auth::user()->id;
   	$customer->save();

   	return redirect()->route('customers.view')->with('success', 'Data save successfully');
   }

   public function edit($id){
   	$editData = Custormer::find($id);
   	return view('backend.customer.edit-customer', compact('editData'));
   }

   public function update(Request $request, $id){
   	$customer = Custormer::find($id);
   	$customer->name = $request->name;
   	$customer->mobile_no = $request->mobile_no;
   	$customer->email = $request->email;
   	$customer->address = $request->address;
   	$customer->updated_by =Auth::user()->id;
   	$customer->save();

   	return redirect()->route('customers.view')->with('success', 'Data Updated successfully');
   }

   public function delete($id){
   	$customer = Custormer::find($id);
   	$customer->delete();

   	return redirect()->route('customers.view')->with('success', 'Data deleted successfully');
   }
}
