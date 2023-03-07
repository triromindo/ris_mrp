<?php

namespace App\Http\Controllers\mst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function index() {
        return view('mst.raw_material.index');
    }
}
