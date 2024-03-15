<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\models\jenis;

class JenisBencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = jenis::paginate();
        return view('jenis.index', compact('jenis'))
            ->with('i', (request()->input('page', 1) - 1) * $jenis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = new Jenis();
        return view('jenis.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Jenis::$rules);
        $jenis = Jenis::create($request->all());
        return redirect()->route('jenis.index')
            ->with('success', 'Jenis berhasil ditambahkan....');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.show', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Jenis::$rules);
        Jenis::findOrFail($id)->update($request->all());
        return redirect()->route('jenis.index')
            ->with('success', 'Jenis barang berhasil diubah...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis = Jenis::find($id)->delete();
        return redirect()->route('jenis.index')
            ->with('success', '1 rekaman Jenis barang berhasil dihapus');

    }
}
