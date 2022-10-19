@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-primary" href="/jenis/tambah">Tambah</a><hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Jenis</th>
                    <th>Jenis Nama</th>
                    <th>Jenis Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis as $row)
                  <tr>
                    <td>{{$row->id_jenis}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->jenis_status}}</td>
                    <td><a class="btn btn-warning" href="/jenis/edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="/jenis/destroy/{{$row->id}}">Delete</td>
                  </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection