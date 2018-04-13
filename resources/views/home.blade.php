@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(90deg, #2AF598, #009EFD);">Menu</div>

                <div class="card-body" style="text-align: center;">
                    <div class="row center-box">
                        <a href="{{ url('/transaksi') }}">
                            <div class="col-50 inline-box">
                                <img class="img-center mar-top" src="{{ asset('img/logo-transaksi.png') }}">Transaksi
                            </div>
                        </a>
                        <a href="{{ url('/nasabah') }}">
                            <div class="col-50 inline-box">
                                <img class="img-center mar-top" src="{{ asset('img/logo-nasabah.png') }}">Nasabah
                            </div>
                        </a>
                        <a href="{{ url('/datasampah') }}">
                            <div class="col-50 inline-box">
                                <img class="img-center mar-top" src="{{ asset('img/logo-sampah.png') }}">Data Sampah
                            </div>
                        </a>
                    </div>

                    <div class="row center-box">
                        <a href="{{ url('/rapotnasabah') }}">
                            <div class="col-50 inline-box">
                                <img class="img-center mar-top" src="{{ asset('img/logo-rapot.png') }}">Rapot Nasabah
                            </div>
                        </a>
                        <a href="{{ url('/bukutabungan') }}">
                            <div class="col-50 inline-box">
                                <img class="img-center mar-top" src="{{ asset('img/logo-tabungan.png') }}">Buku Tabungan
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
