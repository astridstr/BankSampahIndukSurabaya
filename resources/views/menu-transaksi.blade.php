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
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="fa fa-balance-scale"></i>
            </div>
            <div class="small-box-footer"></div>
          </div>
        </div>
    </div>
    <div class="row">    
      <a href="{{ url('/transaksi-tambah') }}">
        <div class="col-lg-3 col-xs-6">
          <div class="box">
            <div class="box-header with-border">
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool pull-left"><i class="fa fa-plus"></i>
                </button>
              </div>
              <span><h3 class="box-title">Tambah Transaksi</h3></span>
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
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                
                  @foreach($transaksi as $listtransaksi)
                  @foreach($inputsampah as $listinputsampah)
                  <tr>
                    <td>{{$listtransaksi->no_rekening}}</td>
                    <td>{{$listinputsampah->id_sampah}}</td>
                    <td>{{$listinputsampah->kuantitas}}</td>
                    <td>{{$listtransaksi->created_at}}</td>
                    <td>
                      <button type="button" class="btn btn-block btn-primary btn-sm"><a href="{{ url('transaksi-edit', array($listtransaksi->no_rekening)) }}">Edit</a></button>
                    <button type="button" class="btn btn-block btn-success btn-sm"><a href="{{ url('transaksi-delete', [$listtransaksi->no_rekening], [$listinputsampah->no_rekening]) }}">Delete</a></button>
                    </td>
                  </tr>
                  @endforeach
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