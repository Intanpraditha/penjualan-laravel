@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Kode Barang</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Kode Barang">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Nama Barang">
	</div>
	<div class="form-group">
		<label>Jenis</label>
	<select name="id_jenis" class="form-control">
		<option>Pilih</option>
		@foreach($jenis as $j)
		<option value="{{$j->id_jenis}}">{{$j->jenis_nama}}</option>
		@endforeach
	</select>
    </div>
	<div class="form-group">
		<label>Supplier</label>
		<select name="id_supplier" class="form-control">
		<option>Pilih</option>
		@foreach($supplier as $j)
		<option value="{{$j->id_supplier}}">{{$j->supplier_nama}}</option>
		@endforeach
	</select>
    </div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual">
    </div>
	<div class="form-group">
		<label>Barang status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Barang status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection