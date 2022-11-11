<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PuskesmasDetailController extends Controller
{
    public function index()
    {
        $puskesmas = Detail::where('user_id', auth()->user()->id)->first();
        $puskesmas->with('user');
        return view('admin.detail.index',compact('puskesmas'));
    }

    public function update(Detail $detail,Request $request)
    {
        // return dd($request->all());
        if($request->hasFile('denah'))
        {
            $denah = $request->file('denah')->store('denah');
        }else{
            $denah = $detail->denah;
        }

        if($request->hasFile('sejarah'))
        {
            $sejarah = $request->file('sejarah')->store('sejarah');
        }else{
            $sejarah = $detail->sejarah;
        }

        if($request->hasFile('maklumat'))
        {
            $maklumat = $request->file('maklumat')->store('maklumat');
        }else{
            $maklumat = $detail->maklumat;
        }

        $detail->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'sejarah' => $sejarah,
            'maklumat' => $maklumat,
            'desksejarah' => $request->deskripsi_sejarah,
            'deskmaklumat' => $request->deskripsi_maklumat,
            'deskdenah' => $request->deskripsi_denah,
            'denah' => $denah,
            'motto' => $request->motto
        ]);
        $detail->save();
        return redirect('/admin/detail');
    }
}
