@extends('app')

@section('content')

@include('sidebar.nasabah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Nasabah <b>Kolektif</b></h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/nasabah') }}">Nasabah</a></li>
        <li class="active">Kolektif</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @foreach($jumlahnasabah as $jumlah)
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$jumlah->jumlah}}</h3>

              <p>Total Nasabah Kolektif</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row">
        <a href="{{ url('/nasabah-tambah') }}">
          <div class="col-lg-3 col-xs-6">
            <div class="box box-warning box-solid">
              <div class="box-header">
                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool pull-left"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <span><h3 class="box-title">Tambah Data Nasabah</h3></span>
              </div>
            </div>
          </div>
        </a>
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Data Nasabah <b>Kolektif</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Rek</th>
                  <th>Nama</th>
                  <th>Bank Sampah</th>
                  <th>No Telp</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Wilayah</th>
                  <th>Penyetoran</th>
                  <th>Waktu</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nasabah as $listnasabah)
                <tr>
                  <td>{{$listnasabah->no_rekening}}</td>
                  <td>{{$listnasabah->nama_nasabah}}</td>
                  <td>{{$listnasabah->nama_banksampah}}</td>
                  <td>{{$listnasabah->no_telp}}</td>
                  <td>{{$listnasabah->tgl_lahir}}</td>
                  <td>{{$listnasabah->alamat}}</td>
                  <td>{{$listnasabah->wilayah}}</td>
                  <td>{{$listnasabah->cara_setor}}</td>
                  <td>{{$listnasabah->waktu_setor}}</td>
                  <td>{{$listnasabah->hari_setor}}</td>
                  <td>{{$listnasabah->jam_setor}}</td>
                  <td>
                    <button type="button" class="btn  btn-primary btn-sm"><a href="{{ url('nasabah-edit', array($listnasabah->no_rekening)) }}"><span class="glyphicon glyphicon-pencil"></span></a></button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger btn-sm"><a href="{{ url('nasabah-delete', [$listnasabah->no_rekening]) }}"><span class="glyphicon glyphicon-trash"></span></a></button>
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