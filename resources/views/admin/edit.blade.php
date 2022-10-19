@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/update/{{$admin->id}}">
	@csrf
    @method('put')
	<div class="form-group">
		<label>ID Admin</label>
	<input class="form-control" type="text" value="{{$admin->id_admin}}" name="id_admin" placeholder="ID Admin">
	</div>
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" value="{{$admin->username}}" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" value="{{$admin->password}}" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Admin level</label>
	<input class="form-control" type="text" value="{{$admin->admin_level}}" name="admin_level" placeholder="Admin level">
    </div>
	<div class="form-group">
		<label>Admin nama</label>
	<input class="form-control" type="text" value="{{$admin->admin_nama}}" name="admin_nama" placeholder="Admin nama">
    </div>
	<div class="form-group">
		<label>Admin status</label>
	<input class="form-control" type="text" value="{{$admin->admin_status}}" name="admin_status" placeholder="Admin status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit" value="Simpan">
	</div>
</form>
</div>

@endsection