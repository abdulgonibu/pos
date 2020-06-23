
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Stock Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
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
                <h3> Daily Stock Report Pdf
                	
                 
             
                </h3>
              </div><!-- /.card-body -->
              <div class="card-body">
              	<table id="example1" border="1" class="table table-bordered">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Supplier Name</th>
                  <th>Category Name</th>
                  <th>Product Name</th>
                  <th>Stock</th>
                  <th>Unit Name</th>
                  
                </tr>
                </thead>
                <tbody>

             @foreach($allData as $key => $product)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{ $product['supplier']['name']}}</td>
                  <td>{{ $product['category']['name']}}</td>
                  <td>{{$product->name}}</td>
                  <td>
                    {{$product->quantity}}
                  </td>
                  <td>{{ $product['unit']['name']}}</td>
                  
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
