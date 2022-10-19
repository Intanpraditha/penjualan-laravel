@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="Id Admin">
	</div>
	<div class="form-group">
		<label>Tanggal Transaksi</label>
	<input class="form-control" type="date" name="transaksi_tanggal" placeholder="Tanggal Transaksi">
	</div>
	<div class="form-group">
		<label>No Nota Transaksi</label>
	<input class="form-control" type="text" name="transaksi_nonota" placeholder="No Nota Transaksi">
    </div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" name="transaksi_status" placeholder="Transaksi Status">
    </div>
	<div class="form-group">
		<label>Barang</label>
		<select name="id_barang" id="" class="form-control">
			<option value="">pilih</option>
			@foreach($barang as $row)
			<option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
			@endforeach
		</select>
    </div>
	<div class="form-group">
		<label>Transaksi Jenis</label>
	<input class="form-control" type="text" name="transaksi_jenis" placeholder="Transaksi Jenis">
    </div>
	<div class="form-group">
		<label>Transaksi Harga</label>
	<input class="form-control" type="text" name="transaksi_harga" placeholder="Transaksi Harga">
    </div>
	<div class="form-group">
		<label>Transaksi Jumlah</label>
	<input class="form-control" type="text" name="transaksi_jumlah" placeholder="Transaksi Jumlah">
    </div>
	<div class="form-group">
		<label>Transaksi Detail status</label>
	<input class="form-control" type="text" name="transaksi_detail_status" placeholder="Transaksi Detail Status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection