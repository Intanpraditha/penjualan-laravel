@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/jenis/store">
	@csrf
	<!-- <div class="form-group">
		<label>ID Jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="ID Jenis">
	</div> -->
	<div class="form-group">
		<label>Jenis nama</label>
	<input class="form-control" type="text" name="jenis_nama" placeholder="Jenis nama">
    </div>
	<div class="form-group">
		<label>Jenis status</label>
	<input class="form-control" type="text" name="jenis_status" placeholder="Jenis status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection