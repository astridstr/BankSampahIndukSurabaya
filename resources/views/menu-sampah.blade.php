@extends('app')

@section('content')

@include('sidebar.sampah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Sampah</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Sampah</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <a href="{{ url('/datasampah-tambah')}}">
          <div class="col-xs-3">
            <div class="box">
              <div class="box-header">
                <i class="fa fa-plus-square"></i> <span><h3 class="box-title">Tambah Data Sampah</h3></span>
              </div>
            </div>
          </div>
        </a>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Sampah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Sampah</th>
                  <th>Jenis Sampah</th>
                  <th>Nama Sampah</th>
                  <th>Harga Fluktuatif</th>
                  <th>Harga Stabil</th>
                  <th>Contoh Barang</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sampah as $listsampah)
                <tr>
                  <th>{{$listsampah->id_sampah}}</th>
                  <th>{{$listsampah->jenis_sampah}}</th>
                  <th>{{$listsampah->nama_sampah}}</th>
                  <th>{{$listsampah->harga_fluktuatif}}</th>
                  <th>{{$listsampah->harga_stabil}}</th>
                  <th>{{$listsampah->contoh_barang}}</th>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id Sampah</th>
                  <th>Jenis Sampah</th>
                  <th>Nama Sampah</th>
                  <th>Harga Fluktuatif</th>
                  <th>Harga Stabil</th>
                  <th>Contoh Barang</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
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