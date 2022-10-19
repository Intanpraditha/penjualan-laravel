@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/supplier/update/{{$supplier->id}}">
	@method('put')
	@csrf
	<div class="form-group">
		<label>ID Supplier</label>
	<input class="form-control" type="text" value="{{$supplier->id_supplier}}" name="supplier_nama" placeholder="Nama Supplier">
	</div>
	<div class="form-group">
		<label>Nama Supplier</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_nama}}" name="supplier_alamat" placeholder="Alamat">
	</div>
	<div class="form-group">
		<label>Alamat</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_alamat}}" name="supplier_phone" placeholder="No Telp">
    </div>
	<div class="form-group">
		<label>No Telp</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_phone}}" name="supplier_status" placeholder="Supplier nama">
    </div>
	<div class="form-group">
		<label>Supplier Status</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_status}}" name="supplier_status" placeholder="Supplier nama">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>

@endsection