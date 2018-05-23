<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    	body {
	        font-size: 14px;
    	}
    	table {
    		width:100%;
    	    font-size: 12px;
    	}
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
        	font-size: 12px;
		}
		th, td {
		    padding: 5px;
		    text-align: left;
        	font-size: 14px;
		}
	</style>
  </head>
  <body>
  	<h2 style="text-align: center;">Nota Transaksi</h2>
  	<p style="text-align: center;">Bank Sampah Induk Surabaya - Jl. Ngangel Timur No. 26 Surabaya - 0851 0009 0858</p>
  	@foreach($nota as $data)
  	<div style="text-align: left;">
  		<p><strong>Nomor Transaksi :</strong> {{$data->id_transaksi}}</p>
  		<p><strong>Tanggal Transaksi :</strong> {{$data->created_at}}</p>
  		<p><strong>Nama/ID Nasabah :</strong> {{$data->nama_nasabah}} / {{$data->no_rekening}}</p>
  	</div>
  	@endforeach
                <table>
                  <tr class="info">
                    <th>Kuantitas</th>
                    <th>Nama Sampah</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                  </tr>
                  @foreach($sampah as $smp)
                  <tr>
                    <td>{{$smp->kuantitas}}</td>
                    <td>{{$smp->id_sampah}}</td>
                    <td>{{$smp->harga}}</td>
                    <td>{{$smp->amount}}</td>
                  </tr>
                  @endforeach
                  @foreach($total as $tl)
                  <tr>
                    <th class="danger" colspan="3">Total Transaksi</th>
                    <td>{{$tl->total}}</td>
                  </tr>
                  @endforeach
                </table>
                <br>
                <div><strong>Keterangan :</strong></div>
                <p>.............................................................................................................................................................................................................</p>
                <p>.............................................................................................................................................................................................................</p>
                <div align="middle">
                	<span><strong>Tanda Tangan Nasabah</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span><strong>Tanda Tangan Petugas</strong></span>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div align="middle">
                	<span>(.......................................)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>(.......................................)</span>
                </div>
  </body>
</html>