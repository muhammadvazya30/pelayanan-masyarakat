<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

// #[Table('masyarakats')]
class Masyarakat extends Model
{
    protected $guarded = ['id'];

    public function keluhans() {
        return $this->hasMany(Keluhan::class, 'masyarakat_id');
    }

}
