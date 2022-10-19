@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/store">
	@csrf
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Admin level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="Admin level">
    </div>
	<div class="form-group">
		<label>Admin nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="Admin nama">
    </div>
	<div class="form-group">
		<label>Admin status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="Admin status">
    </div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection