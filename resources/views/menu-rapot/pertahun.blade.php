@extends('app')

@section('content')

@include('sidebar.rapot')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Rapot Nasabah</h1>
      <a href="{{ url('/home') }}" style="color: blue;"><small> <<  back to home</small></a>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/rapotnasabah') }}">Rapot Nasabah</a></li>
        <li class="active">Pertahun</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Pertahun</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Rekening</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>No KTP(s)</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Pekerjaan</th>
                  <th>Program Simpanan</th>
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
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>A</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>No Rekening</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>No KTP(s)</th>
                  <th>Tanggal Lahir</th>
                  <th>Tempat Lahir</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Kelurahan</th>
                  <th>Kecamatan</th>
                  <th>Pekerjaan</th>
                  <th>Program Simpanan</th>
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