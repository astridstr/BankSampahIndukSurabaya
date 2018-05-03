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
      <div class="col-md-8">
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
                <label>Input Sampah</label>
              </div>
              <table id="myTable" class=" table order-list">
                <thead>
                  <tr>
                    <th>ID Sampah</th>
                    <th>Kuantitas</th>
                    <th>Harga</th>
                    <th>Amount</th>       
                    <th>Delete</th>      
                  </tr>
                </thead>
                <tbody>
                 <tr>
                  <td>
                    <select class="form-control productname" name="id_sampah[]">
                      <option value="0" selected="true" disabled="true">ID Sampah</option>
                      @foreach($sampah as $listsampah)
                      <option value="{{$listsampah->id_sampah}}">{{$listsampah->id_sampah}} - {{$listsampah->jenis_sampah}} - {{$listsampah->nama_sampah}}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="text" class="form-control qty" placeholder="Kuantitas" name="kuantitas[]" required="">
                  </td>
                  <td>
                    <input type="text" class="form-control price" placeholder="Harga" name="harga[]" required="">
                  </td>
                  <td>
                    <input type="text" class="form-control amount" placeholder="Amount" name="amount[]" required="">
                  </td>
                  <td>
                    <input type="button" id="delete_row" class="ibtnDel btn btn-danger" value="Delete">
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" style="text-align: left;">
                    <input type="button" class="btn btn btn-block btn-success " id="addrow" value="Add Row" />
                  </td>
                  <td><b>Total</b></td>
                  <td><b class="total"></b></td>
                </tr>
                <tr>
                </tr>
              </tfoot>
            </table>
            <!-- /.input group -->


          </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- general form elements -->
            <div class="box box-primary box-solid">
              <div class="box-header">
                <span><h3 class="box-title">Daftar Harga Sampah</h3></span>
              </div>
              <div class="box-body">
                <table id="myTable" class=" table table-striped table-condensed table-responsive order-list">
                  <thead>
                    <tr>
                      <th>ID Sampah</th>
                      <th>Harga Fluktuatif</th>
                      <th>Harga Stabil</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($sampah as $listsampah)
                   <tr>
                    <td>{{$listsampah->id_sampah}}</td>
                    <td>{{$listsampah->harga_fluktuatif}}</td>
                    <td>{{$listsampah->harga_stabil}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript">

//--------------------------------calculate function---------------------------------------------------------------------      
$('tbody').delegate('.qty,.price,.amount','keyup',function(){
  var tr =$(this).parent().parent();
  var qty = tr.find('.qty').val();
  var price = tr.find('.price').val();
  var amount = (qty * price);
  tr.find('.amount').val(amount);
  total();
});

function total()
{
  var total =0;
  $('.amount').each(function(i,e){
    var amount = $(this).val()-0;
    total +=amount;
  })
  $('.total').html(total);
};

//------------------------------add rows-------------------------------------------------------------------------------------

$(document).ready(function () {
  var counter = 0;

  $("#addrow").on("click", function() {
    var newRow = $("<tr>");
    var cols = "";

    cols += '<td><select class="form-control select2" style="width: 100%;" name="id_sampah[]"><option selected="selected">ID Sampah</option>@foreach($sampah as $listsampah)<option value="{{$listsampah->id_sampah}}">{{$listsampah->id_sampah}} - {{$listsampah->jenis_sampah}} - {{$listsampah->nama_sampah}}</option>@endforeach</select></td>';
    cols += '<td><input type="text" class="form-control qty" placeholder="Kuantitas" name="kuantitas[]" required=""></td>';
    cols += '<td><input type="text" class="form-control price" placeholder="Harga" name="harga[]" required=""></td>';
    cols += '<td><input type="text" class="form-control amount" placeholder="Amount" name="amount[]" required=""></td>';
    cols += '<td><input type="button" id="delete_row" class="ibtnDel btn btn-danger" value="Delete"></td>';
    newRow.append(cols);
    $("table.order-list").append(newRow);
    counter++;
  });

  $("table.order-list").on("click", ".ibtnDel", function (event) {
    $(this).parent().parent().remove();
    counter -= 1;
    total();
  });
});
</script>
@endsection