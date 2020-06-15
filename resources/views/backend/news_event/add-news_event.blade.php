@extends('backend.layouts.master')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage News And Event</h1>
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
                <h3> Add News And Event
                 <a class="btn btn-success float-right btn-sm" href="{{ route('news_events.view')}}"><i class="fa fa-list"></i> News And Event List</a>
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<form method="post" action="{{ route('news_events.store')}}" id="myForm" enctype="multipart/form-data">
              		@csrf
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="date">Date</label>
                      <input type="text" name="date" class="form-control" id="datepicker" placeholder="YYYY-MM-DD" readonly>
                    </div>   		
              			<div class="form-group col-md-8">
              				<label for="short_title">Short Title</label>
              				<input type="text" name="short_title" class="form-control" id="short_title">
              			</div>

              			<div class="form-group col-md-12">
              				<label for="long_title">Long Title</label>
                      <textarea type="text" name="long_title" class="form-control" rows="5" id="long_title"></textarea>
              			</div>

              			<div class="form-group col-md-4">
              				<label for="image">Image</label>
              				<input type="file" name="image" class="form-control" id="image">
              			</div>
              			<div class="form-group col-md-2">
              				<img id="showImage" src="{{ url('public/upload/no-image.png')}}" style="width: 150px; height: 160px;border: 1px solid #000">
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