@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-primary" href="/barang/tambah">Tambah</a><hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Supplier</th>
                    <th>Harga Jual</th>
                    <th>Barang Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
                  <tr>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->barang_kode}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->harga_jual}}</td>
                    <td>{{$row->barang_status}}</td>
                    <td><a class="btn btn-warning" href="/barang/edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="/barang/destroy/{{$row->id}}">Delete</td>
                  </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection