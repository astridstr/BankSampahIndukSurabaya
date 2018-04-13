@extends('app')

@section('content')

@include('sidebar.nasabah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Nasabah</h1> <h1>Nasabah</h1>
      <small>Data Nasabah Individu</small>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/nasabah') }}">Nasabah</a></li>
        <li class="active">Individu</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <a href="{{ url('/nasabah-tambah') }}">
          <div class="col-xs-3">
            <div class="box">
              <div class="box-header">
                <i class="fa fa-plus-square"></i> <span><h3 class="box-title">Tambah Data Nasabah</h3></span>
              </div>
            </div>
          </div>
        </a>

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Nasabah <b>Individu</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Rek</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Wilayah</th>
                  <th>Pekerjaan</th>
                  <th>Penyetoran</th>
                  <th>Waktu</th>
                  <th>Hari</th>
                  <th>Jam</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nasabah as $listnasabah)
                <tr>
                  <td>{{$listnasabah->no_rekening}}</td>
                  <td>{{$listnasabah->nama_nasabah}}</td>
                  <td>{{$listnasabah->no_telp}}</td>
                  <td>{{$listnasabah->tgl_lahir}}</td>
                  <td>{{$listnasabah->alamat}}</td>
                  <td>{{$listnasabah->wilayah}}</td>
                  <td>{{$listnasabah->pekerjaan}}</td>
                  <td>{{$listnasabah->cara_setor}}</td>
                  <td>{{$listnasabah->waktu_setor}}</td>
                  <td>{{$listnasabah->hari_setor}}</td>
                  <td>{{$listnasabah->jam_setor}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No Rek</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Wilayah</th>
                  <th>Pekerjaan</th>
                  <th>Penyetoran</th>
                  <th>Waktu</th>
                  <th>Hari</th>
                  <th>Jam</th>
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