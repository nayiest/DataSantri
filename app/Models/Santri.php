<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    public function prestasi(){
        return $this->belongsTo(prestasi::class);
    }public function pelanggaran(){
        return $this->belongsTo(pelanggaran::class);
    }


    protected $fillable = ['name', 'gender'];

    public function dashboard()
    {
        return $this->belongsTo(dashboard::class);
    }
}
