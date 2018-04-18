@extends('app')

@section('content')

@include('sidebar.nasabah')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Form Tambah Nasabah</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('/nasabah') }}">Nasabah</a></li>
        <li class="active">Tambah Nasabah</li>
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
            <form role="form" action="{{url('/nasabah-update', array($nasabah->no_rekening))}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <!-- nama_nasabah -->
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" required="" name="nama_nasabah" value="{{ $nasabah->nama_nasabah }}">
                </div>
                <!-- kategori_nasabah -->
                <div class="form-group">
                  <label>Kategori Nasabah</label>
                  <select class="form-control" name="kategori_nasabah" value="{{ $nasabah->kategori_nasabah }}">
                    <option value="individu">Individu</option>
                    <option value="kolektif">Kolektif</option>
                  </select>
                </div>
                <!-- nama_banksampah -->
                <div class="form-group">
                  <label>Nama Bank Sampah<small> *jika kategori kolektif</small></label>
                  <input type="text" class="form-control" placeholder="Nama Bank Sampah"
                  name="nama_banksampah" value="{{ $nasabah->nama_banksampah }}">
                </div>
                <!-- no_ktp -->
               <div class="form-group">
                  <label>No KTP<small> *atau SIM, KTM</small></label>
                  <input type="text" class="form-control" placeholder="No KTP"
                  name="no_ktp" value="{{ $nasabah->no_ktp }}">
                </div>
                <!-- no_telp -->
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" class="form-control" placeholder="No Telp"
                  name="no_telp" value="{{ $nasabah->no_telp }}">
                </div>
                <!-- alamat -->
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Alamat"
                  name="alamat" value="{{ $nasabah->alamat }}">
                </div>
                <!-- kecamatan -->
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" class="form-control" placeholder="Kecamatan"
                  name="kecamatan" value="{{ $nasabah->kecamatan }}">
                </div>
                <!-- kelurahan -->
                <div class="form-group">
                  <label>Kelurahan</label>
                  <input type="text" class="form-control" placeholder="Kelurahan"
                  name="kelurahan" value="{{ $nasabah->kelurahan }}"
                </div>
                <!-- wilayah -->
                <div class="form-group">
                <label>Wilayah</label>
                  <select class="form-control select2" style="width: 100%;" name="wilayah" value="{{ $nasabah->wilayah }}">
                    <option selected="selected">Pilih Wilayah</option>
                    <option value="Surabaya Pusat">Surabaya Pusat</option>
                    <option value="Surabaya Utara">Surabaya Utara</option>
                    <option value="Surabaya Timur">Surabaya Timur</option>
                    <option value="Surabaya Selatan">Surabaya Selatan</option>
                    <option value="Surabaya Barat">Surabaya Barat</option>
                  </select>
                </div>
                <!-- tgl_lahir -->
                <div class="form-group">
                <label>Tanggal Lahir</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tgl_lahir" value="{{ $nasabah->tgl_lahir }}">
                  </div>
                </div>
                <!-- tempat_lahir -->
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir"
                  name="tempat_lahir" value="{{ $nasabah->tempat_lahir }}">
                </div>
                <!-- pekerjaan -->
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <input type="text" class="form-control" placeholder="Pekerjaan"
                  name="pekerjaan" value="{{ $nasabah->pekerjaan }}">
                </div>
                <!-- program_simpanan -->
                <div class="form-group">
                <label>Program Simpanan</label>
                  <select class="form-control select2" style="width: 100%;" name="program_simpanan" value="{{ $nasabah->program_simpanan }}">
                    <option selected="selected">Pilih Program Simpanan</option>
                    <option value="Reguler">Tabungan Reguler</option>
                    <option value="Pendidikan">Tabungan Pendidikan</option>
                    <option value="Hari Raya">Tabungan Hari Raya</option>
                  </select>
                </div>
                <!-- cara_setor -->
                <div class="form-group">
                  <label>Cara Penyetoran</label>
                  <select class="form-control" name="cara_setor" value="{{ $nasabah->cara_setor }}">
                    <option value="Mandiri">Diantar sendiri</option>
                    <option value="Dijemput">Diambil oleh petugas</option>
                  </select>
                </div>
                <!-- waktu_setor -->
                <div class="form-group">
                  <label>Waktu Penyetoran</label>
                  <select class="form-control" name="waktu_setor" name="waktu_setor" value="{{ $nasabah->waktu_setor }}">
                    <option value="1 minggu sekali">1 minggu sekali</option>
                    <option value="2 minggu sekali">2 minggu sekali</option>
                    <option value="3 minggu sekali">3 minggu sekali</option>
                    <option value="1 bulan sekali">1 bulan sekali</option>
                  </select>
                </div>
                <!-- hari_setor -->
                <div class="form-group">
                  <label>Hari</label>
                  <select class="form-control" name="hari_setor" name="hari_setor" value="{{ $nasabah->hari_setor }}">
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
                  <select class="form-control" name="jam_setor" name="jam_setor" value="{{ $nasabah->jam_setor }}">
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