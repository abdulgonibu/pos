@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Pending List</h1>
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
                <h3> Product List
                	
                 <!-- <a class="btn btn-success float-right btn-sm" href="{{ route('purchase.add')}}"><i class="fa fa-plus-circle"></i>Add Purchase</a> -->
              
                </h3>
              </div><!-- /.card-body -->
              <div class="table-responsive" >
              	<table id="example1" class="table table-bordered table-responsive">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Purchaase No</th>
                  <th>Date</th>
                  <th>Supplier Name</th>
                  <th>Category</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Buying Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

             @foreach($allData as $key => $purchase)
                <tr>
                  <td>{{ $key+1}}</td>
                  <td>{{ $purchase->purchase_no}}</td>
                  <td>{{date('d-m-y',strtotime($purchase->date))}}</td>
                  <td>{{$purchase['supplier']['name']}}</td>
                  <td>{{ $purchase['category']['name']}}</td>
                  <td>{{ $purchase['product']['name']}}</td>
                  <td>{{$purchase->description}}</td>
                  <td>
                    {{$purchase->buying_qty}}
                    {{$purchase['product']['unit']['name']}}
                  </td>
                  <td>{{$purchase->unit_price}}</td>
                  <td>{{$purchase->buying_price}}</td>
                  <td>
                    @if($purchase->status=='0')
                    <span style="background: #FC4236;padding: 5px">Pending</span>
                    @elseif($purchase->status=='1')
                    <span style="background: #5EAB00;padding: 5px">Approved</span>
                    @endif
                  </td>
                  
                  <td>
                    @if($purchase->status=='0')
                  	<a  href="{{ route('purchase.approve',$purchase->id)}}" id="approvedBtn" class="btn btn-sm btn-success" title="approve"><i class="fa fa-check-circle"></i></a>
                    @endif
                  </td>
                </tr>
            @endforeach

                </tbody>
                
              </table>

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
@endsection