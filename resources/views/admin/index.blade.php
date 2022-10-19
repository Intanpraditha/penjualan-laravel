@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-primary" href="/admin/tambah">Tambah</a><hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Admin level</th>
                    <th>Admin Nama</th>
                    <th>Admin Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $row)
                  <tr>
                    <td>{{$row->id_admin}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->admin_level}}</td>
                    <td>{{$row->admin_nama}}</td>
                    <td>{{$row->admin_status}}</td>
                    <td><a class="btn btn-warning" href="/admin/edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="/admin/destroy/{{$row->id}}">Delete</td>
                  </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection