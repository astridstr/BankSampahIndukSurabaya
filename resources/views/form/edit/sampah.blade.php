@extends('app')

@section('content')

@include('sidebar.sampah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Form Data Sampah</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/nasabah') }}">Nasabah</a></li>
        <li class="active">Edit Data Sampah</li>
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
            <form action="{{ url('datasampah-update', array($sampah->id_sampah)) }}" method="post" enctype="multipart/form-data" role="form" >
              {{ csrf_field() }}
              <div class="box-body">
                <!-- nama_sampah -->
                <div class="form-group">
                  <label>Nama Sampah</label>
                  <input type="text" class="form-control" placeholder="Nama Sampah" required="" name="nama_sampah" value="{{ $sampah->nama_sampah }}">
                </div>
                <!-- jenis_sampah -->
                <div class="form-group">
                <label>Jenis Sampah</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_sampah" required="" value="{{ $sampah->jenis_sampah }}">
                    <option selected="selected">{{ $sampah->jenis_sampah }}</option>
                    <option value="Tembaga">Tembaga</option>
                    <option value="Kuningan">Kuningan</option>
                    <option value="Aluminium">Aluminium</option>
                    <option value="Besi">Besi</option>
                    <option value="Kertas">Kertas</option>
                    <option value="Botol">Botol</option>
                    <option value="Plastik Lembaran">Plastik Lembaran</option>
                    <option value="Plastik">Plastik</option>
                    <option value="Lain-lain">Lain-lain</option>
                  </select>
                </div>
                <!-- harga_fluktuatif -->
                <div class="form-group">
                  <label>Harga Cash</label>
                  <input type="text" class="form-control" placeholder="Harga Cash"
                  name="harga_fluktuatif" value="{{ $sampah->harga_cash }}">
                </div>
                <!-- harga_stabil -->
                <div class="form-group">
                  <label>Harga Tabungan</label>
                  <input type="text" class="form-control" placeholder="Harga Tabungan"
                  name="harga_stabil" required="" value="{{ $sampah->harga_tabungan }}">
                </div>
                <!-- contoh_barang -->
                <div class="form-group">
                  <label for="exampleInputFile">Contoh Barang</label>
                  <input type="text" class="form-control" placeholder="Contoh Barang"
                  name="contoh_barang" required="" value="{{ $sampah->contoh_barang }}">
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