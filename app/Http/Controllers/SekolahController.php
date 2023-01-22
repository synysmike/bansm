<?php

namespace App\Http\Controllers;
use App\Models\sekolah;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\StoresekolahRequest;
use App\Http\Requests\UpdatesekolahRequest;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $tittle = 'Datatable Sekolah';
        $js = 'admin/layout/js/dttblejs';
        $css = 'admin/layout/css/dttblecss';
        $data = Sekolah::all();
        // return $data;
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($data) {
                    $url = Crypt::encrypt($data->id);
                    return '<a href="javascript:void(0)" data-id="'.$url.'" class="btn btn-info show-btn"> Edit</a>';
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('sekolah.daftar_sekolah', compact('tittle','js','css')
        );
    }
    public function post($id)
    {   
        
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
     * @param  \App\Http\Requests\StoresekolahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $decid = Crypt::decrypt($id);        // dd($decid);
        $where = array('id' => $decid);
        $unit = Sekolah::where($where)->first();
        return response()->json($unit);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(sekolah $sekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesekolahRequest  $request
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesekolahRequest $request, sekolah $sekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(sekolah $sekolah)
    {
        //
    }
}
