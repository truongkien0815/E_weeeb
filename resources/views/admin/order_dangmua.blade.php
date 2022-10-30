<x-header_admin_order>
        
       

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          id
                      </th>
                      <th style="width: 10%">
                          name
                      </th>
                      <th style="width: 10%">
                         Telephone
                      </th>
                      <th style="width: 10%">
                         Dia chi
                      </th>
                      <th style="width: 10%" class="text-center">
                          money
                      </th>
                      <th style="width: 10%">
                       product name
                      </th>
                      </th>
                      <th style="width: 20%">
                      image
                      </th>
                      <th style="width: 20%">
                      Status
                      </th>
                      <th style="width: 10%">
                     Số lượng
                      </th>
                      <th style="width: 10%">
                      Thực hiện
                      </th>
                    
                  </tr>
              </thead>
              <tbody>
                @foreach($order as $item)
                  <tr>
                      <td>
                         {{  $item->id}}
                      </td>
                      <td>
                      {{  $item->firstsName ." ". $item->lastName}}   
                      </td>
                      <td>
                           {{  $item->telephone}}  
                      </td>
                      <td>
                      {{  $item->address}} 
                      </td>
                      <td>
                         {{  $item->money}}
                      </td>
                      <td>
                      {{  $item->product->name}}       
                      </td>
                      <td>
                        <img src="" alt="" sizes="10px" srcset="">
                        <img src=" {{ asset('images/'.$item->product->image) }} " alt="" height="120px" width="120px">
                             
                      </td>
                      <td>
                        
                      @if($item->status == 0)
                      {
                        đang đặt hàng
                      }
                      @elseif($item->status == 1)
                          đã hủy
                      @elseif($item->status == 2)
                      đã giao
                      @else
                       chưa xác nhận
                      @endif
                            
                        
                  
                     
                      </td>
                    
                     
                     
                     
                      <!-- <td>
                      {{  $item->product_id}}   
                      </td> -->
                      <td>
                      {{  $item->soluong}}   
                      </td>
                    
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <!-- <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Edit
                          </a> -->
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              <form action="{{ url('admin/orders/'.$item->id)}}" method="post">
                           
                             
                  @csrf
                                <input type="submit" value="Xác nhận">
                              </form>
                          
                          </a>
                      </td>
                  </tr>
                  @endforeach
           
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js')}}"></script>
</body>
</html>
                    </x-header_admin_order>