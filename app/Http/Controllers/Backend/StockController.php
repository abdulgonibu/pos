<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\Category;
use App\Model\Unit;
use Auth;
use PDF;

class StockController extends Controller
{
   public function stockReport(){
   	

   	$allData = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();

   	return view('backend.stock.view-stock', compact('allData'));
   }

   public function stockReportPdf(){
   	 $data['allData'] = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->where('supplier_id', $request->supplier_id)->get();
   	 $pdf = PDF::loadView('backend.pdf.stock-pdf', $data);
	 $pdf->SetProtection(['copy', 'print'], '', 'pass');
	 return $pdf->stream('document.pdf');
   }

   public function stockReportsuppliarproductwise(){
   	$data['suppliers'] = Supplier::all();
   	$data['categories'] = Category::all();
   	return view('backend.stock.supplier-product-wise-report', $data);
   }

   public function stockReportsuppliarproductwisePdf(Request $request){
   	$data['allData'] = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
   	 $pdf = PDF::loadView('backend.pdf.supplier-wise-stock-pdf', $data);
	 $pdf->SetProtection(['copy', 'print'], '', 'pass');
	 return $pdf->stream('document.pdf');

   }
   public function stockReportproductwisePdf(Request $request){
   	$data['allData'] = Product::orderBy('supplier_id','asc')->orderBy('category_id','asc')->get();
   	 $pdf = PDF::loadView('backend.pdf.stock-pdf', $data);
	 $pdf->SetProtection(['copy', 'print'], '', 'pass');
	 return $pdf->stream('document.pdf');

   }
}
