@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice Manage</h1>
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
                <h3> Invoice List
                  
                 <a class="btn btn-success float-right btn-sm" href="{{ route('invoice.add')}}"><i class="fa fa-plus-circle"></i>Add Invoice</a>
              
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Customer Name</th>
                  <th>Purchase No</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

             
                <tr>
                  <td>1</td>
                  <td>Abdul Goni</td>
                  <td>32</td>
                  <td>20-20-20</td>
                  <td>Dhaka</td>
                  <td>
                   
                  </td>
                </tr>
            

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