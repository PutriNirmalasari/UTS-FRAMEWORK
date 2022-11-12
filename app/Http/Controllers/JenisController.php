<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Jenis_keb;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jenis_keb' => 'required'
        ]);

        Jenis_keb::create($request->all());

        return redirect()->route('profile.index')
            ->with('success', 'Student created successfully.');
    }
    public function destroy($id)
    {
        DB::table('jenis_kebs')->where('id_jenisKeb', '=', $id)->delete();
        return redirect()->route('profile.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
