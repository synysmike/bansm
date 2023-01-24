<?php

namespace App\Http\Controllers;
use App\Models\sekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DetilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = Auth::user();
        $tittle = $user->nama;
        $decid = $user->id;
        $where = array('id' => $decid);
        $unit = Sekolah::where($where)->first();

        return view(
            'sekolah.edit_sekolah',
            compact('unit','tittle'));
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
        $alldata = $request->all();
        $id = $request->id;
        $validator = $request->validate([
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'kelas' => 'max:25',
            'keterangan' => 'max:250',
            'kondisi' => 'required',
            'file_ijop' => 'file|mimes:pdf,PDF|max:2048',
            'masa' => 'after:01/01/2019|before:01/01/2023',
            
        ]);
        $unit = Sekolah::updateOrCreate(
            ['id' => $id],
            // $validator);
            ['kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'kondisi' => $request->kondisi,
            'keterangan' => $request->keterangan,
            'namaks' => $request->namaks,
            'namapj' => $request->namapj,
            'no_ks' => $request->hpks,
            'hppj' => $request->hppj]);
        return response()->json($unit);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
