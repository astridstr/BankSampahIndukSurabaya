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
    @foreach($jumlahtransaksi as $jumlah)
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$jumlah->jumlah}}</h3>

            <p>Transaksi</p>
          </div>
          <div class="icon">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="row">    
      <a href="{{ url('/transaksi-tambah') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="box box-info box-solid">
            <div class="box-header">
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool pull-left"><i class="fa fa-plus"></i>
                </button>
              </div>
              <span><h3 class="box-title">Tambah Data Transaksi</h3></span>
            </div>
          </div>
        </div>
      </a>
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Data Transaksi</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Transaksi</th>
                  <th>No Rek</th>
                  <th>Total Transaksi</th>
                  <th>Tanggal Transaksi</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sums as $sum)
                <tr>
                  <td>{{$sum->id_transaksi}}</td>
                  <td>{{$sum->no_rekening}}</td>
                  <td>{{$sum->jml}}</td>
                  <td>{{$sum->created_at}}</td>
                  <td>
                    <button type="button" class="btn  btn-primary btn-sm"><a href="{{ url('transaksi-edit', array($sum->id_transaksi)) }}"><span class="glyphicon glyphicon-pencil"></span></a></button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm"><a href="{{ url('transaksi-delete', [$sum->id_transaksi]) }}"><span class="glyphicon glyphicon-trash"></span></a></button>
                  </td>
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