@extends('app')

@section('content')

@include('sidebar.transaksi')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Form Tambah Transaksi</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ url('/transaksi') }}">Transaksi</a></li>
      <li class="active">Tambah Transaksi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">

          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('/transaksi-tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <!-- no_rekening -->
              <div class="form-group">
                <label>No. Rekening</label>
                <input type="text" class="form-control" placeholder="No. Rekening"
                name="no_rekening" required="">
              </div>
              <!-- id_sampah -->
              <div class="form-group">
                <label>ID Sampah</label>
                <div class="col-xs-4">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <!-- alamat -->
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat"
                name="alamat" required="">
              </div>
              <!-- kecamatan -->
              <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" class="form-control" placeholder="Kecamatan"
                name="kecamatan" required="">
              </div>
              <!-- kelurahan -->
              <div class="form-group">
                <label>Kelurahan</label>
                <input type="text" class="form-control" placeholder="Kelurahan"
                name="kelurahan" required="">
              </div>
              <!-- wilayah -->
              <div class="form-group">
                <label>Wilayah</label>
                <select class="form-control select2" style="width: 100%;" name="wilayah" required="">
                  <option selected="selected">Pilih Wilayah</option>
                  <option value="Pusat">Surabaya Pusat</option>
                  <option value="Utara">Surabaya Utara</option>
                  <option value="Timur">Surabaya Timur</option>
                  <option value="Selatan">Surabaya Selatan</option>
                  <option value="Barat">Surabaya Barat</option>
                </select>
              </div>
              <!-- tgl_lahir -->
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" required="">
                </div>
              </div>
              <!-- tempat_lahir -->
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" placeholder="Tempat Lahir"
                name="tempat_lahir" required="">
              </div>
              <!-- pekerjaan -->
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" class="form-control" placeholder="Pekerjaan"
                name="pekerjaan">
              </div>
              <!-- program_simpanan -->
              <div class="form-group">
                <label>Program Simpanan</label>
                <select class="form-control select2" style="width: 100%;" name="program_simpanan" required="">
                  <option selected="selected">Pilih Program Simpanan</option>
                  <option value="Reguler">Tabungan Reguler</option>
                  <option value="Pendidikan">Tabungan Pendidikan</option>
                  <option value="Hari Raya">Tabungan Hari Raya</option>
                </select>
              </div>
              <!-- cara_setor -->
              <div class="form-group">
                <label>Cara Penyetoran</label>
                <select class="form-control" name="cara_setor" required="">
                  <option value="Mandiri">Diantar sendiri</option>
                  <option value="Dijemput">Diambil oleh petugas</option>
                </select>
              </div>
              <!-- waktu_setor -->
              <div class="form-group">
                <label>Waktu Penyetoran</label>
                <select class="form-control" name="waktu_setor" name="waktu_setor" required="">
                  <option value="1 minggu sekali">1 minggu sekali</option>
                  <option value="2 minggu sekali">2 minggu sekali</option>
                  <option value="2 minggu sekali">2 minggu sekali</option>
                  <option value="1 bulan sekali">1 bulan sekali</option>
                </select>
              </div>
              <!-- hari_setor -->
              <div class="form-group">
                <label>Hari</label>
                <select class="form-control" name="hari_setor" name="hari_setor" required="">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                </select>
              </div>
              <!-- jam_setor -->
              <div class="form-group">
                <label>Jam</label>
                <select class="form-control" name="jam_setor" name="jam_setor" required="">
                  <option value="08.00-10.00">08.00-10.00</option>
                  <option value="10.00-12.00">10.00-12.00</option>
                  <option value="13.00-15.00">13.00-15.00</option>
                </select>
              </div>


              <!-- /.input group -->
            </div>

            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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