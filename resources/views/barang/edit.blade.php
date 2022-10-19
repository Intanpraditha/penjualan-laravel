@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
    @method('put')
	<div class="form-group">
		<label>ID Barang</label>
	<input class="form-control" type="text" name="id_barang" placeholder="ID Barang" value="{{$barang->id_barang}}" >
	</div>
	<div class="form-group">
		<label>Kode Barang</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Kode Barang" value="{{$barang->barang_kode}}" >
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Nama Barang" value="{{$barang->barang_nama}}" >
	</div>
	<div class="form-group">
		<label>Jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="Jenis" value="{{$barang->id_jenis}}" >
    </div>
	<div class="form-group">
		<label>ID Supplier</label>
	<input class="form-control" type="text" name="id_supplier" placeholder="ID Supplier" value="{{$barang->id_supplier}}" >
    </div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual" value="{{$barang->harga_jual}}" >
    </div>
	<div class="form-group">
		<label>Barang status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Barang status" value="{{$barang->barang_status}}" >
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit" value="Simpan">
	</div>
</form>
</div>

@endsection