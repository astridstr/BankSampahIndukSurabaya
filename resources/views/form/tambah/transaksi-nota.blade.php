@extends('app')

@section('content')

@include('sidebar.transaksi')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/transaksi') }}">Transaksi</a></li>
      <li class="active">Tambah Transaksi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
              <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <span><h3 class="box-title">Nota Transaksi</h3></span>
              </div>
              <div class="box-body">
                
                <table id="myTable" class=" table table-bordered table-condensed table-responsive order-list">
                  @foreach($nota as $data)
                  <tr>
                    <th class="active">Nomor Transaksi</th>
                    <td colspan="3">{{$data->id_transaksi}}</td>
                  </tr>
                  <tr>
                    <th class="active">Tanggal Transaksi</th>
                    <td colspan="3">{{$data->created_at}}</td>
                  </tr>
                  <tr>
                    <th class="active">Nama/ID Nasabah</th>
                    <td colspan="3">{{$data->nama_nasabah}} / {{$data->no_rekening}}</td>
                  </tr>
                  @endforeach
                  <tr class="info">
                    <th>Kuantitas</th>
                    <th>Nama Sampah</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                  </tr>
                  @foreach($sampah as $smp)
                  <tr>
                    <td>{{$smp->kuantitas}}</td>
                    <td>{{$smp->id_sampah}}</td>
                    <td>{{$smp->harga}}</td>
                    <td>{{$smp->amount}}</td>
                  </tr>
                  @endforeach
                  @foreach($total as $tl)
                  <tr>
                    <th class="danger" colspan="3">Total Transaksi</th>
                    <td>{{$tl->total}}</td>
                  </tr>
                  @endforeach
                  
                </table>
                <div class="box-footer">
                  <a href="#" class="buttonpdf">Print Nota </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

@endsection