@extends('app')

@section('content')

@include('sidebar.sampah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Form Tambah Data Sampah</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/nasabah') }}">Nasabah</a></li>
        <li class="active">Tambah Data Sampah</li>
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
            <form role="form" action="{{url('/datasampah-tambah')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <!-- nama_sampah -->
                <div class="form-group">
                  <label>Nama Sampah</label>
                  <input type="text" class="form-control" placeholder="Nama Sampah" required="" name="nama_sampah">
                </div>
                <!-- jenis_sampah -->
                <div class="form-group">
                <label>Jenis Sampah</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_sampah" required="">
                    <option selected="selected">Pilih Jenis Sampah</option>
                    <option value="Pusat">A</option>
                    <option value="Utara">B</option>
                    <option value="Timur">C</option>
                    <option value="Selatan">D</option>
                    <option value="Barat">E</option>
                  </select>
                </div>
                <!-- harga_fluktuatif -->
                <div class="form-group">
                  <label>Harga Fluktuatif<small> *harga untuk nasabah kolektif</small></label>
                  <input type="text" class="form-control" placeholder="Harga Fluktuatif"
                  name="harga_fluktuatif">
                </div>
                <!-- harga_stabil -->
                <div class="form-group">
                  <label>Harga Stabil</label>
                  <input type="text" class="form-control" placeholder="Harga Stabil"
                  name="harga_stabil" required="">
                </div>
                <!-- contoh_barang -->
                <div class="form-group">
                  <label for="exampleInputFile">Upload Gambar Sampah</label>
                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
                  <input type="file" id="file" name="image">
                  <p class="help-block">dengan format (.jpg)</p>
                </div>


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
  

@endsection