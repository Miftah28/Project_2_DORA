<?php

namespace App\Http\Controllers;
use App\Models\Stokdarah;

use Illuminate\Http\Request;

class StokdarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stokdarah.index')->with([
            'stokdarah' => Stokdarah::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'goldar' => 'required|min:1|max:3',
            'stok' => 'required|min:1|max:3',
            'tglupdatestok' => 'required'
        ]);

        $stokdarah = new Stokdarah;
        $stokdarah ->goldar = $request->goldar;
        $stokdarah ->stok = $request->stok;
        $stokdarah ->tglupdatestok = $request->tglupdatestok;
        $stokdarah -> save();

        return to_route('stokdarah.index')->with('success','Data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('stokdarah.index')->with([
            'stokdarah' => Stokdarah::find($id),
        ]);
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
        $request -> validate([
            'goldar' => 'required|min:1|max:3',
            'stok' => 'required|min:1|max:3',
            'tglupdatestok' => 'required'
        ]);

        $stokdarah = Stokdarah::find($id);
        $stokdarah ->goldar = $request->goldar;
        $stokdarah ->stok = $request->stok;
        $stokdarah ->tglupdatestok = $request->tglupdatestok;
        $stokdarah -> save();

        return to_route('stokdarah.index',$stokdarah->id)->with('success','Data saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
