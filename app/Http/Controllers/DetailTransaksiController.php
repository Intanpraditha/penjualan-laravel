<?php

namespace App\Http\Controllers;
use App\Models\Transaksi_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index($id)
    {
        $transaksidetail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang','tbl_barang.id_barang','=','tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
                    ->get();
    
            //tampilkan view transaksi dan kirim datanya ke view tersebut
        return view('transaksidetail/index',compact(['transaksidetail']));
    }
}
