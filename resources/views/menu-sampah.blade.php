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
      @foreach ($jumlahsampah as $jumlah)
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$jumlah->jumlah}}</h3>

              <p>Total Data Sampah</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-trash">  </i>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row">
        <a href="{{ url('/datasampah-tambah') }}">
          <div class="col-lg-3 col-xs-6">
            <div class="box box-success box-solid">
              <div class="box-header">
                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool pull-left"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <span><h3 class="box-title">Tambah Data Sampah</h3></span>
              </div>
            </div>
          </div>
        </a>
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Sampah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Jenis Sampah</th>
                  <th>Nama Sampah</th>
                  <th>Harga Fluktuatif</th>
                  <th>Harga Stabil</th>
                  <th>Contoh Barang</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sampah as $listsampah)
                <tr>
                  <td>{{$listsampah->id_sampah}}</td>
                  <td>{{$listsampah->jenis_sampah}}</td>
                  <td>{{$listsampah->nama_sampah}}</td>
                  <td>{{$listsampah->harga_fluktuatif}}</td>
                  <td>{{$listsampah->harga_stabil}}</td>
                  <td>{{$listsampah->contoh_barang}}</td>
                  <td>
                    <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('datasampah-edit', array($listsampah->id_sampah)) }}"><span class="glyphicon glyphicon-pencil"></span></a></button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm"><a href="{{ url('datasampah-delete', [$listsampah->id_sampah]) }}"><span class="glyphicon glyphicon-trash"></span></a></button>
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