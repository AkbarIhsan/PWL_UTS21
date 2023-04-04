<?php

namespace App\Http\Controllers;

use App\Models\Teller;
use Illuminate\Http\Request;

class TellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teller = teller::all();
        $posts = teller::orderBy('no_rekening', 'desc')->paginate(6);
        return view('index', compact('teller'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
            ]);

            teller::create($request->all());

            return redirect()->route('teller.index')->with('success', 'Teller Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function show($no_rekening)
    {
        $teller = teller::find($no_rekening);
        return view('detail', compact('teller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rekening)
    {
        $teller = teller::find($no_rekening);
        return view('edit', compact('teller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rekening)
    {
        $request->validate([
        'no_rekening' => 'required',
        'nama' => 'required',
        'alamat' => 'required',
        'jenis_tabungan' => 'required',
        'saldo' => 'required',
        ]);

        teller::create($request->all());

        return redirect()->route('teller.index')->with('success', 'Teller Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rekening)
    {
        teller::find($no_rekening)->delete();
        return redirect()->route('teller.index')-> with('success', 'Teller Berhasil Dihapus');
    }
}
