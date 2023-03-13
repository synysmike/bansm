<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Daftarhadir;
use App\Models\Config;
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
        $datanya = Config::where('id',1)->first();
        #edit ini
        $judul = "$datanya->judul";
        $link = "$datanya->link";
        $kategori = "<input type='hidden' name='kat_dh' id='kat_dh' value='".$datanya->kategori."'>";
        #sampai sini
        $mytime = Carbon::now('Asia/Jakarta');
        $isi = explode(",",$datanya->tabel);
        

        
        // dd($iv);

        $kat = $datanya->kategori;
        $theads =$isi;
        array_unshift($theads , 'No.');
        $unit = $isi;
        array_unshift($unit , 'DT_RowIndex');

        $form = Form::select('tag_field')
            ->whereIn("nama_field",$isi)
            ->get();
        $today = $mytime->format('d-m-Y');
        $data = Daftarhadir::where('tanggal',$today)
        ->where('kat_dh',$datanya->kategori)
        ->orderBy('created_at','DESC')->get();
        if ($request->ajax()) {            
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
            }

            
        
        // dd($form);
        return view('daftarhadir.form', compact('unit','theads','judul','kategori','form','link','kat'));
    }
    public function kesediaan(Request $request)
    {
        #edit ini
        $datanya = Config::where('id',2)->first();
        #edit ini
        $judul = "$datanya->judul";
        $link = "$datanya->link";
        $kategori = "<input type='hidden' name='kat_dh' id='kat_dh' value='".$datanya->kategori."'>";
        #sampai sini
        $mytime = Carbon::now('Asia/Jakarta');
        $isi = explode(",",$datanya->tabel);
        

        
        // dd($iv);

        $kat = $datanya->kategori;
        $theads =$isi;
        array_unshift($theads , 'No.');
        $unit = $isi;
        array_unshift($unit , 'DT_RowIndex');



        $form = Form::select('tag_field')
            ->whereIn("nama_field",$isi)
            ->get();
        $today = $mytime->format('d-m-Y');
        $data = Daftarhadir::where('tanggal',$today)
        ->where('kat_dh',$datanya->kategori)
        ->orderBy('created_at','DESC')->get();
        if ($request->ajax()) {            
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
            }

            
        
        // dd($form);
        return view('daftarhadir.form', compact('unit','theads','judul','kategori','form','link','kat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function config(Request $request)
    {
        //
        $data = Config::where('id',1)->first();
        $tittle = "uji select2";
        $data = Config::where('id','1')->first();
        // dd($data);
        return view('daftarhadir.config',compact('tittle','data'));
    }
    public function set_config(Request $request)
    {
        //
        if($request->tabel){
        $tabel = $request->tabel;
        $newdata = implode("),(", $tabel);
        $unit = Config::updateOrCreate(
            ['id' => 1],
            [
            "tabel" => $newdata,
            "kategori" => $request->kat,
            "link" => $request->link,
            "judul" => $request->judul,
        ]);
        }else{
        
        $unit = Config::updateOrCreate(
            ['id' => 1],
            [
            "kategori" => $request->kat,
            "link" => $request->link,
            "judul" => $request->judul,
        ]);
        }
        $tabel = $request->tabel;
        $newdata = implode(",", $tabel);
        $unit = Config::updateOrCreate(
            ['id' => 1],
            [
            "tabel" => $newdata,
            "kategori" => $request->kat,
            "link" => $request->link,
            "judul" => $request->judul,
        ]);
        return response()->json($unit);
        
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



        $validator = $request->validate([            
            'fotorek' => 'file|mimes:pdf,PDF,jpg,jpeg,png|max:1028|nullable',
            'surat_tugas' => 'file|mimes:pdf,PDF|max:1028|nullable',
            'surat_sehat' => 'file|mimes:pdf,PDF|max:1028|nullable',
            'pernyataan' => 'file|mimes:pdf,PDF|max:1028|nullable',
        ]);




        

        // $id = $request->id;
    
        // simpan nama gambar
        
        // $validator['signature'] = Storage::disk('local')->put($file, $ttd);




        // $columns = implode(", ",array_keys($insData));
        // $link = mysqli_connect($url, $user, $pass,$db);
        // $escaped_values = array_map(array($link, 'real_escape_string'), array_values($insData));

        // $values  = implode("', '", $escaped_values);
        // $sql = "INSERT INTO `fbdata`($columns) VALUES ('$values')";




        // dd($iv);

        // $isi = array();
        // $char = "$request->";
        // foreach($tbls as $tbl ){
        // // $isi = $tbl."=>$request->".$tbl.",";
        // $isi = "'".$tbl."' => ".$char.$tbl.",\n";
        // }
        // '$'=>$request->$
        // $impl = implode(" ",$isi);



        $mytime = Carbon::now('Asia/Jakarta');
        $nia = $request->nia;
        
        
        // $data = Config::where('id',1)->first();
        // $tbls = explode(",",$data->tabel); 
        // $i=0;
        // $iv=array();
        // foreach ($tbls as $tbl) {
        // $iv[]= $request->$tbl;
        //     $i++;
        // }    
        // $add = $mytime->format('d-m-Y');
        // array_unshift($iv , $add,$file);
        // // dd($iv);

        // $anu = $data->tabel.',tanggal,ttd';



        // $unit = Daftarhadir::insert('insert into users (tanggal,ttd,'.$anu.') values ('.$iv.')');
        // if ($request->file('pernyataan')) {
        //     $file_nyata = $request->file('pernyataan');
        //     $extension_nyata = $file_nyata->getClientOriginalExtension();
        //     $filename_nyata = "surat_pernyataan/".time() . "_" . $nia . "_pernyataan." . $extension_nyata;
        //     $validator['pernyataan'] = $filename_nyata;
        //     Storage::disk('public')->put($filename_nyata, $file_nyata);
        //     // $file_nyata->storeAs('pernyataan', $filename_nyata);            
        // }

        // if ($request->file('surat_sehat')) {
        //     $file_sehat = $request->file('surat_sehat');
        //     $extension_sehat = $file_sehat->getClientOriginalExtension();
        //     $filename_sehat = "surat_sehat/".time() . "_" . $nia . "_surat_sehat." . $extension_sehat;
        //     $validator['surat_sehat'] = $filename_sehat;
        //     Storage::disk('public')->put($filename_sehat, $file_sehat);
        //     // $file_sehat->storeAs('surat_sehat', $filename_sehat);            
        // }

        // if ($request->file('surat_tugas')) {
        //     $file_tugas = $request->file('surat_tugas');
        //     $extension_tugas = $file_tugas->getClientOriginalExtension();
        //     $filename_tugas = "surat_tugas/".time() . "_" . $nia . "_surat_tugas." . $extension_tugas;
        //     $validator['surat_tugas'] = $filename_tugas;
        //     Storage::disk('public')->put($filename_tugas, $file_tugas);
        //     // $file_tugas->storeAs('surat_tugas', $filename_tugas);            
        // }
        if ($request->file('fotorek')) {
            $file_tugas = $request->file('fotorek');
            $extension_tugas = $file_tugas->getClientOriginalExtension();
            $filename_tugas = "fotorek/".time() . "_" . $nia . "_fotorek." . $extension_tugas;
            $validator['fotorek'] = $filename_tugas;
            Storage::disk('public')->put($filename_tugas,$filename_tugas);
            // $file_tugas->storeAs('surat_tugas', $filename_tugas);            
        }


        // untuk TTD
        $signature = $request->signature;      
        $signatureFileName = uniqid().'.png';
        $signature = str_replace('data:image/png;base64,', '', $signature);
        $signature = str_replace(' ', '+', $signature);
        $ttd = base64_decode($signature);
        $file = 'ttdSosialisasi/'.$signatureFileName;
        Storage::disk('public')->put($file, $ttd);

        $unit = Daftarhadir::updateOrCreate(            
            [
            // []=>$isi,
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'nia'=>$nia,
            'npwp'=>$request->npwp,
            'norek'=>$request->norek,
            'hp'=>$request->hp,
            // 'fotorek'=>$filename_tugas,
            'tanggal'=>$mytime->format('d-m-Y'),
            'ttd' => $file,
            'kabkota'=>$request->asal,
            'kat_dh'=>$request->kat_dh,
            // 'unit'=>$request->unit,
            // 'unsur'=>$request->unsur,
            // 'jabatan'=>$request->jabatan,
            // 'alamat_kantor'=>$request->alamat_kantor,
            // 'alamat_rumah'=>$request->alamat_rumah,
            // 'kesanggupan'=>$request->kesanggupan,
            // 'surat_tugas'=>$filename_tugas,
            // 'pernyataan'=>$filename_nyata,
            // 'surat_sehat'=>$filename_sehat
            // 'document' => $request->file('document')->store('dokumen/'.$parent->tahun.'/'.$parent->satker->namasatker.'/'.$parent->risk_code.'/tindakan-penanganan', 'public'),
            ]);

            return response()->json($unit);
    }

    public function postkesediaan(Request $request)
    {
        //



        $validator = $request->validate([            
            // 'fotorek' => 'file|mimes:pdf,PDF,jpg,jpeg,png|max:1028|nullable',
            'surat_tugas' => 'file|mimes:pdf,PDF|max:1028|nullable',
            'surat_sehat' => 'file|mimes:pdf,PDF|max:1028|nullable',
            'pernyataan' => 'file|mimes:pdf,PDF|max:1028|nullable',
        ]);



        $mytime = Carbon::now('Asia/Jakarta');
        $nia = $request->nia;
        
    
        if ($request->file('pernyataan')) {
            $file_nyata = $request->file('pernyataan');
            $extension_nyata = $file_nyata->getClientOriginalExtension();
            $filename_nyata = "surat_pernyataan/".time() . "_" . $nia . "_pernyataan." . $extension_nyata;
            $validator['pernyataan'] = $filename_nyata;
            Storage::disk('public')->put($filename_nyata, $filename_nyata);
            // $file_nyata->storeAs('pernyataan', $filename_nyata);            
        }

        if ($request->file('surat_sehat')) {
            $file_sehat = $request->file('surat_sehat');
            $extension_sehat = $file_sehat->getClientOriginalExtension();
            $filename_sehat = "surat_sehat/".time() . "_" . $nia . "_surat_sehat." . $extension_sehat;
            $validator['surat_sehat'] = $filename_sehat;
            Storage::disk('public')->put($filename_sehat, $filename_sehat);
            // $file_sehat->storeAs('surat_sehat', $filename_sehat);            
        }

        if ($request->file('surat_tugas')) {
            $file_tugas = $request->file('surat_tugas');
            $extension_tugas = $file_tugas->getClientOriginalExtension();
            $filename_tugas = "surat_tugas/".time() . "_" . $nia . "_surat_tugas." . $extension_tugas;
            $validator['surat_tugas'] = $filename_tugas;
            Storage::disk('public')->put($filename_tugas, $filename_tugas);
            // $file_tugas->storeAs('surat_tugas', $filename_tugas);            
        }
    // untuk TTD
    $signature = $request->signature;      
    $signatureFileName = uniqid().'.png';
    $signature = str_replace('data:image/png;base64,', '', $signature);
    $signature = str_replace(' ', '+', $signature);
    $ttd = base64_decode($signature);
    $file = 'ttdSosialisasi/'.$signatureFileName;
    Storage::disk('public')->put($file, $ttd);



        $unit = Daftarhadir::updateOrCreate(            
            [
            // []=>$isi,
            'nama'=>$request->nama,
            'kelas'=>$request->kelas,
            'nia'=>$nia,
            'hp'=>$request->hp,
            'tanggal'=>$mytime->format('d-m-Y'),
            'kabkota'=>$request->asal,
            'kat_dh'=>$request->kat_dh,
            'unit'=>$request->unit,
            'unsur'=>$request->unsur,
            'jabatan'=>$request->jabatan,
            'alamat_kantor'=>$request->alamat_kantor,
            'alamat_rumah'=>$request->alamat_rumah,
            'kesanggupan'=>$request->kesanggupan,
            'surat_tugas'=>$filename_tugas,
            'pernyataan'=>$filename_nyata,
            'surat_sehat'=>$filename_sehat
            // 'document' => $request->file('document')->store('dokumen/'.$parent->tahun.'/'.$parent->satker->namasatker.'/'.$parent->risk_code.'/tindakan-penanganan', 'public'),
            ]);

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
