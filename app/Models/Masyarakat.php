<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

// #[Table('masyarakats')]
class Masyarakat extends Model
{
    protected $fillable = [
    'nama',
    'nomor_kk',
    'nomor_ktp',
    'alamat',
    'jenis_kelamin'
];
}
