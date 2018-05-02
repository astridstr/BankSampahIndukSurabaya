@extends('app')

@section('content')

@include('sidebar.transaksi')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Buku Tabungan</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Buku Tabungan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-3">
          <!-- Data Nasabah -->
          <div class="box box-primary">
            
            <div class="box-body box-profile">
              @foreach($nasabah as $listnasabah)
              <h3 class="profile-username text-center">{{$listnasabah->nama_nasabah}}</h3>

              <p class="text-muted text-center">{{$listnasabah->kategori_nasabah}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>No Rekening</b> <span class="pull-right">{{$listnasabah->no_rekening}}</span>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <span class="pull-right">{{$listnasabah->alamat}}</span>
                </li>
                <li class="list-group-item">
                  <b>No Telp</b> <span class="pull-right">{{$listnasabah->no_telp}}</span>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              @endforeach
            </div>
          </div>
          
          <!-- /.data nasabah -->
        </div>
        <!-- Histori Tabungan -->
        <div class="col-xs-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Histori Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>ID Sampah</th>
                  <th>Kuantitas</th>
                  <th>Harga</th>
                  <th>Saldo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.Histori Tabungan -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  

@endsection