@extends('layout.master')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<!-- <a class="btn btn-primary" href="/transaksidetail/tambah">Tambah</a><hr> -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi detail</th>
                    <th>ID Transaksi</th>
                    <th>ID Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi detail Status</th>
                    <!-- <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksidetail as $row)
                  <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->id_transaksi}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                    <!-- <td><a class="btn btn-warning" href="/transaksidetail/edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="/transaksidetail/destroy/{{$row->id}}">Delete</td> -->
                  </tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection