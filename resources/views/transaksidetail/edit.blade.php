@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@method('put')
	@csrf
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" value="{{$transaksi->id_admin}}" name="id_admin" placeholder="Id Admin">
	</div>
	<div class="form-group">
		<label>Tanggal Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal" placeholder="Tanggal Transaksi">
	</div>
	<div class="form-group">
		<label>No Nota Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_nonota}}" name="transaksi_nonota" placeholder="No Nota Transaksi">
    </div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_status}}" name="transaksi_status" placeholder="Transaksi Status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>

@endsection