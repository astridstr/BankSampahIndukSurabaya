@extends('app')

@section('content')

@include('sidebar.tabungan')

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
                @foreach($saldo as $saldoo)
                <li class="list-group-item">
                  <b>Saldo</b> <span class="pull-right">{{$saldoo->jumlah}}</span>
                </li>
                @endforeach
              </ul>
<!-- 
              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              @endforeach
            </div>
          </div>
          
          <!-- /.data nasabah -->
        </div>
        <!-- Histori Tabungan -->
        <div class="col-xs-9">
          <div class="box box-primary box-solid">
            <div class="box-header">
              <h3 class="box-title">Histori Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>Tanggal Transaksi</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sums as $sum)
                <tr>
                  <td>{{$sum->id_transaksi}}</td>
                  <td>{{$sum->created_at}}</td>
                  <td>{{$sum->jml}}</td>
                </tr>
                @endforeach
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