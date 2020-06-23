@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Supplier/Product Wise Report Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <section class="col-sm-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3> Daily Stock Report
                	
                 <!-- <a class="btn btn-success float-right btn-sm" href="{{ route('stock.report.pdf')}}" target="_blank"><i class="fa fa-download"></i>Download Pdf</a> -->
              
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<div class="row">
              		<div class="col-sm-12 text-center">
              			<strong>Supplisr wise report</strong>
              			<input type="radio" name="supplier_product_wise" value="supplier_wise" class="search_value"> &nbsp;&nbsp;
              			<strong>Product wise report</strong>
              			<input type="radio" name="supplier_product_wise" value="product_wise" class="search_value">
              			
              		</div>
              	</div>
              		<div class="show_supplier" style="display: none;">
              			<form method="GET" action="{{ route('stock.report.supplier.product.wise.pdf')}}" id="supplierWiseForm">
              				<div class="form-row col-sm-12">
              					<div class="col-sm-8">
              						<label>Supplier Name</label>
              						<select name="supplier_id" class="form-control select2">
              							@foreach($suppliers as $supplier)
              							<option value="{{$supplier->id}}">{{$supplier->name}}</option>
              							@endforeach
              							
              						</select>
              						
              					</div>
              					<div class="col-sm-2" style="padding-top: 29px;">
              						<button type="submit" class="btn btn-primary btn-sm">Search</button>
              					</div>
              					
              				</div>
              			</form>
              			
              		</div>
              	</div>

              		<div class="show_product">
              			<form method="GET" action="{{ route('stock.report.product.wise.pdf')}}" id="supplierWiseForm">
              			<div class="form-row">
                         <label>Category Name</label>
                      <select name="category_id" id="category_id" class="form-control select2">
                      	<div class="form-group col-sm-4">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Product Name</label>
                      <select name="product_id" id="product_id" class="form-control select2">
                        <option value="">Select Product</option>
                      </select>
                    </div>
              					<div class="col-sm-4" style="padding-top: 29px;">
              						<button type="submit" class="btn btn-primary btn-sm">Search</button>
              					</div>
              					
              				</div>
              			</form>
              			
              		</div>
              		
              	
              </div>
            
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
               </div>
            </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <script type="text/javascript">
    	$(document).on('change','.search_value', function(){
    		var search_value = $(this).val();
    		if(search_value == 'supplier_wise'){
    			$('.show_supplier').show();
    		}else{
    			$('.show_supplier').hide();
    		}

    	});
    </script>

    <script type="text/javascript">
    	$(document).on('change','.search_value', function(){
    		var search_value = $(this).val();
    		if(search_value == 'product_wise'){
    			$('.show_product').show();
    		}else{
    			$('.show_product').hide();
    		}
    		

    	});
    </script>
@endsection