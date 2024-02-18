<?php

namespace App\Http\Controllers;

use App\Models\PinjamBuku;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class PinjamController extends Controller
{
    public function create(){

    }

    public function store(Request $request){
        $data = $request->all();

        PinjamBuku::create([
            $data,
            'status' => '0'
        ]);

        SweetAlert::success("Success", "Data berhasil ditambahkan!");

        return redirect();
    }
}
