@extends('app')

@section('content')

@include('sidebar.transaksi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Transaksi</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <a href="{{ url('/transaksi-tambah') }}">
          <div class="col-xs-3">
            <div class="box">
              <div class="box-header">
                <i class="fa fa-plus-square"></i> <span><h3 class="box-title">Tambah Data Transaksi</h3></span>
              </div>
            </div>
          </div>
        </a>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Rek</th>
                  <th>ID Sampah</th>
                  <th>Kuantitas</th>
                  <th>Tanggal Transaksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transaksi as $listtransaksi)
                <tr>
                  <td>{{$listtransaksi->no_rekening}}</td>
                  <td>{{$listtransaksi->id_sampah}}</td>
                  <td>{{$listtransaksi->kuantitas}}</td>
                  <td>{{$listtransaksi->tgl_transaksi}}</td>
                </tr>
                @endforeach
                </tbody>
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