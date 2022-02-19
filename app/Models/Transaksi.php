<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function outlet()
    {
        return $this->hasOne(Outlet::class);
    }
    public function member()
    {
        return $this->hasOne(Member::class);
    }
    public function paket()
    {
        return $this->hasOne(Paket::class);
    }
    public function detail_transaksi()
    {
        return $this->hasOne(DetailTransaksi::class);
    }
}
