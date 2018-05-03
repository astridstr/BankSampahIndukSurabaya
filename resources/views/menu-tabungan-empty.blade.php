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
      <div class="alert alert-info alert-dismissible">
        <a href="{{ url('/bukutabungan') }}"><button type="button" class="close">&times;</button></a>
        <h4><i class="icon fa fa-info"></i> Notifikasi</h4>
        No Rekening Tidak Ditemukan
      </div>      
    </section>
    <!-- /.content -->
  </div>
  

@endsection