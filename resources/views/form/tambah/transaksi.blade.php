@extends('app')

@section('content')

@include('sidebar.transaksi')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Form Tambah Transaksi</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/transaksi') }}">Transaksi</a></li>
      <li class="active">Tambah Transaksi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">

          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('/transaksi-tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- no_rekening -->
              <div class="form-group">
                <label>No. Rekening</label>
                <input type="text" class="form-control" placeholder="No. Rekening"
                name="no_rekening" required="">
              </div>
              <!-- id_sampah -->
              <div class="form-group">
                <label>Input Sampah</label>
              </div>
              <table class="table table-bordered" id="dynamic_field">
                <thead>
                  <tr>
                    <th>ID Sampah</th>
                    <th>Kuantitas</th>
                    <th>Tambah Sampah</th>              
                  </tr>
                </thead>
                <tbody>
                 <tr>
                  <td>
                    <input type="text" class="form-control" placeholder="ID Sampah" name="id_sampah" required="">
                  </td>
                  <td>
                    <input type="text" class="form-control" placeholder="Kuantitas" name="kuantitas" required="">
                  </td>
                  <td>
                    <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- /.input group -->
          </div>

          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var i=1;
    $('#add').click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" class="form-control" placeholder="ID Sampah" name="id_sampah" required=""></td><td><input type="text" class="form-control" placeholder="Kuantitas"name="kuantitas" required=""></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function(){
      var button_id = $(this).attr("id"); 
      $('#row'+button_id+'').remove();
    });
  });
</script>
@endsection