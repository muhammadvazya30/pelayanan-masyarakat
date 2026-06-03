<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function show(Keluhan $keluhan):Keluhan {
        $keluhan = Keluhan::with('pelapor')->where('masyarakat_id', $keluhan->id)->first();
        return $keluhan;
    }
}
