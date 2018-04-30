@extends('app')

@section('content')

@include('sidebar.rapot')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Rapot Nasabah</h1>

      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/rapotnasabah') }}">Rapot Nasabah</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#surabaya-utara" data-toggle="tab">2018</a></li>
              <li><a href="#surabaya-timur" data-toggle="tab">2017</a></li>
              <li><a href="#surabaya-selatan" data-toggle="tab">2016</a></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="surabaya-utara" style="position: relative; height: 300px;">
                <div class="box-body table-responsive">
                  <small>  *Keterangan : T (Tonase), N (Nominal)</small>
                <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th rowspan="2">Id</th>
                  <th rowspan="2">Nama Bank Sampah</th>
                  <th rowspan="2">Wilayah</th>
                  <th colspan="2">Jan</th>
                  <th colspan="2">Feb</th>
                  <th colspan="2">Mar</th>
                  <th colspan="2">Apr</th>
                  <th colspan="2">Mei</th>
                  <th colspan="2">Jun</th>
                  <th colspan="2">Jul</th>
                  <th colspan="2">Aug</th>
                  <th colspan="2">Sep</th>
                  <th colspan="2">Okt</th>
                  <th colspan="2">Nov</th>
                  <th colspan="2">Des</th>
                </tr>
                <tr>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rapot2018 as $listnasabah)
                <tr>
                  <td>{{$listnasabah->no_rekening}}</td>
                  <td>{{$listnasabah->nama_banksampah}}</td>
                  <td>{{$listnasabah->wilayah}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
              </div>
              <div class="chart tab-pane" id="surabaya-timur" style="position: relative; height: 300px;">
                <div class="box-body table-responsive">
                  <small>  *Keterangan : T (Tonase), N (Nominal)</small>
                <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th rowspan="2">Id</th>
                  <th rowspan="2">Nama Bank Sampah</th>
                  <th rowspan="2">Wilayah</th>
                  <th colspan="2">Jan</th>
                  <th colspan="2">Feb</th>
                  <th colspan="2">Mar</th>
                  <th colspan="2">Apr</th>
                  <th colspan="2">Mei</th>
                  <th colspan="2">Jun</th>
                  <th colspan="2">Jul</th>
                  <th colspan="2">Aug</th>
                  <th colspan="2">Sep</th>
                  <th colspan="2">Okt</th>
                  <th colspan="2">Nov</th>
                  <th colspan="2">Des</th>
                </tr>
                <tr>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rapot2017 as $listnasabah)
                <tr>
                  <td>{{$listnasabah->no_rekening}}</td>
                  <td>{{$listnasabah->nama_banksampah}}</td>
                  <td>{{$listnasabah->wilayah}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
              </div>
              <div class="chart tab-pane" id="surabaya-selatan" style="position: relative; height: 300px;">
                <div class="box-body table-responsive">
                  <small>  *Keterangan : T (Tonase), N (Nominal)</small>
                <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th rowspan="2">Id</th>
                  <th rowspan="2">Nama Bank Sampah</th>
                  <th rowspan="2">Wilayah</th>
                  <th colspan="2">Jan</th>
                  <th colspan="2">Feb</th>
                  <th colspan="2">Mar</th>
                  <th colspan="2">Apr</th>
                  <th colspan="2">Mei</th>
                  <th colspan="2">Jun</th>
                  <th colspan="2">Jul</th>
                  <th colspan="2">Aug</th>
                  <th colspan="2">Sep</th>
                  <th colspan="2">Okt</th>
                  <th colspan="2">Nov</th>
                  <th colspan="2">Des</th>
                </tr>
                <tr>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                  <th>T</th>
                  <th>N</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rapot2017 as $listnasabah)
                <tr>
                  <td>{{$listnasabah->no_rekening}}</td>
                  <td>{{$listnasabah->nama_banksampah}}</td>
                  <td>{{$listnasabah->wilayah}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
              </div>

            </div>
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  

@endsection