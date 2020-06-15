@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Product</h1>
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
                <h3> Add Product
                 <a class="btn btn-success float-right btn-sm" href="{{ route('products.view')}}"><i class="fa fa-list"></i> Product List</a>
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<form method="post" action="{{ route('products.store')}}" id="myForm" enctype="multipart/form-data">
              		@csrf
                  <div class="form-row">

              			<div class="form-group col-md-6">
              				<label for="name">Supplier Name</label>
                      <select name="supplier_id" class="form-control">
                        <option value="">Select Supplier </option>
                        @foreach($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->name}}
                        </option>
                        @endforeach
                        
                      </select>
              				
              			</div>

                    <div class="form-group col-md-6">
                      <label for="name"> Category Name</label>
                      <select name="category_id" class="form-control select2">
                        <option value="">Select Category </option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}
                        </option>
                        @endforeach
                        
                      </select>
                      
                    </div>

                    <div class="form-group col-md-6">
                      <label for="product"> Product Name</label>
                      <input type="text" name="name" class="form-control select2" id="product">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="name"> Unit Name</label>
                      <select name="unit_id" class="form-control select2">
                        <option value="">Select Unit </option>
                        @foreach($units as $unit)
                        <option value="{{$unit->id}}">{{$unit->name}}
                        </option>
                        @endforeach
                        
                      </select>
                      
                    </div>


              			
              			<div class="form-group col-md-6">
              				<input type="submit" value="Submit" class="btn btn-primary">
              			</div>

              		</div>

              	</form>

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

</div>
<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format:'yyyy-mm-dd'
        });
    </script>
@endsection