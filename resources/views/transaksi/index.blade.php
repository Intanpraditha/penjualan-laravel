@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-primary" href="/transaksi/tambah">Tambah</a><hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Tanggal Transaksi</th>
                    <th>No Nota Transaksi</th>
                    <th>Transaksi Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $row)
                  <tr>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->id_admin}}</td>
                    <td>{{$row->transaksi_tanggal}}</td>
                    <td>{{$row->transaksi_nonota}}</td>
                    <td>{{$row->transaksi_status}}</td>
                    <td><a class="btn btn-warning" href="/transaksi/edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="/transaksi/destroy/{{$row->id}}">Delete</a>
                    <a class="btn btn-success" href="/transaksidetail/detail/{{$row->id_transaksi}}">Detail</a></td>
                  </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection