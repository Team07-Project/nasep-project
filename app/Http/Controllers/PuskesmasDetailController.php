<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class PuskesmasDetailController extends Controller
{
    public function index()
    {
        $puskesmas = Detail::where('user_id', auth()->user()->id)->first();
        return view('admin.detail.index',compact('puskesmas'));
    }
}
