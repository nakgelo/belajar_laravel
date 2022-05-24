<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = Siswa::all();
       return view('siswa.index', compact(
           'datas'
       ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSiswaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSiswaRequest $request)
    {
        // dd($request->all());
        $siswa = Siswa::create($request->all());

        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSiswaRequest  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSiswaRequest $request, $id)
   {
       $siswa = Siswa::find($id);
       $siswa->nama = $request-> input('nama'); 
       $siswa->jurusan = $request-> input('jurusan'); 
       $siswa->nis = $request-> input('nis'); 
       $siswa-> update();
       return redirect('siswa');
   }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { $siswa = siswa::findOrFail($id);
        $siswa->delete();
        

        if ($siswa) {
            return redirect()
            ->route('siswa.index')
            ->with([
                'success' => 'data has been deleted'
            ]);
            
        } 
        else {
            return redirect()
            ->route('siswa.index')
            ->with([
                'error' => 'There is something went wrong, try again later'
            ]);
        }
        //
    }
}
