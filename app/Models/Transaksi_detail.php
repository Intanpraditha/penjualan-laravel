<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaksi_detail extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
            {
                return [
                    'id_transaksi_detail' => [
                        'format' => 'Dtr?', // Format kode yang akan digunakan.
                        'length' => 3 // Jumlah digit yang akan digunakan sebagai nomor urut
                    ]
                ];
            }
    use HasFactory;
    protected $table='tbl_transaksi_detail';
    protected $guarded = [];  
}
