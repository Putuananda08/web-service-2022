<?php

namespace App\Http\Controllers;
use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $data = Soal::all();
        return view('soal/index', compact('data'));
    }
    public function create()
    {
        return view('soal/add');
    }
    public function ambilData(Request $request)
    {
    $data = Soal::create($request->all());
    return redirect('data-soal');

    }
}
