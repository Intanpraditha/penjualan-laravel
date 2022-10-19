@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/jenis/update/{{$jenis->id}}">
	@csrf
    @method('put')
	<div class="form-group">
		<label>ID Jenis</label>
	<input class="form-control" type="text" value="{{$jenis->id_jenis}}" name="id_jenis" placeholder="ID Jenis">
	</div>
	<div class="form-group">
		<label>Jenis nama</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_nama}}" name="jenis_nama" placeholder="Jenis nama">
    </div>
	<div class="form-group">
		<label>Jenis status</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_status}}" name="jenis_status" placeholder="Jenis status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit" value="Simpan">
	</div>
</form>
</div>

@endsection