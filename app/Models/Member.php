<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $incrementing = false;
    protected $table = 'member';
    protected $guarded = ['id'];
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
