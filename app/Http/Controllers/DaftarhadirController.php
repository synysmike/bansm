<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Daftarhadir;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDaftarhadirRequest;
use App\Http\Requests\UpdateDaftarhadirRequest;

class DaftarhadirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        #edit ini
        $judul = "Daftar Hadir Sosialisasi Tahap 3";
        $kategori = "<input type='hidden' name='kat_dh' id='kat_dh' value='sosialisasi tahap 3'>";
        #sampai sini
        
        $theads = [
            'No',
            'Nama',
            'NPSN',
            'Nama Sekolah/Madrasah',
            'Kab./Kota',
            'Jabatan',
            'Alamat Sekolah',
            'Tanggal Pengisian'
        ];
        $unit = [
            'DT_RowIndex',
            'nama',
            'npsn',
            'nama_lembaga',
            'kabkota',
            'jabatan',
            'alamat_kantor',
            'tanggal'
        ];
        $fields = [
            'nama',
            'npsn',
            'nama_lembaga',
            'kabkota',
            'jabatan',
            'alamat_kantor',
            'hp',
            'ttd'
        ];
        $form = Form::select('tag_field')
            ->whereIn("nama_field",$fields)
            ->get();
        $mytime = Carbon::now('Asia/Jakarta');
        $today = $mytime->format('d-m-Y');
        $data = Daftarhadir::where('tanggal',$today)
        ->orderBy('created_at','DESC')->get();
        if ($request->ajax()) {            
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
            }
        
        // dd($form);
        return view('daftarhadir.form', compact('unit','theads','judul','kategori','form'));
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
     * @param  \App\Http\Requests\StoreDaftarhadirRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $signature = $request->signature;      
        $signatureFileName = uniqid().'.png';
        $signature = str_replace('data:image/png;base64,', '', $signature);
        $signature = str_replace(' ', '+', $signature);
        $ttd = base64_decode($signature);
        $file = 'ttdSosialisasi/'.$signatureFileName;
        Storage::disk('public')->put($file, $ttd);

        // $id = $request->id;
        $validator = $request->validate([
            'nama' => 'required',
            'npsn' => 'required',
            'nama_lembaga' => 'required',
            'hp' => 'numeric|digits_between:9,13',
            'kabkota' => 'required',
            'jabatan' => 'required',
            'signature' => 'required',
            // 'kpr' => 'file|mimes:pdf,PDF|max:2048|nullable',
        ]);
        // simpan nama gambar
        
        // $validator['signature'] = Storage::disk('local')->put($file, $ttd);
        $mytime = Carbon::now('Asia/Jakarta');
        $unit =
            Daftarhadir::updateOrCreate(
            [
            'kat_dh' => $request->kat_dh,
            'nama' => $validator['nama'],
            'hp' => $validator['hp'],
            'kabkota' => $validator['kabkota'],
            'npsn' => $validator['npsn'],
            'nama_lembaga' => $validator['nama_lembaga'],
            'alamat_kantor' => $request->alamat_kantor,
            'tanggal'=>$mytime->format('d-m-Y'),
            'jabatan' => $validator['jabatan'],
            'ttd' => $file

            // 'document' => $request->file('document')->store('dokumen/'.$parent->tahun.'/'.$parent->satker->namasatker.'/'.$parent->risk_code.'/tindakan-penanganan', 'public'),

            ]
        );
            return response()->json($unit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarhadir  $daftarhadir
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarhadir $daftarhadir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarhadir  $daftarhadir
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarhadir $daftarhadir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDaftarhadirRequest  $request
     * @param  \App\Models\Daftarhadir  $daftarhadir
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDaftarhadirRequest $request, Daftarhadir $daftarhadir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarhadir  $daftarhadir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarhadir $daftarhadir)
    {
        //
    }
}
