@extends("admin.layout.wrapper")
@section("admin-container")
<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">                            
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="npsn">NPSN</label><div class="col-sm-12 col-md-7"><input id="npsn" type="text" class="form-control" placeholder="npsn" name="npsn" disabled value="{{$data->npsn}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="nama_satuan_pendidikan">Nama Satuan Pendidikan</label><div class="col-sm-12 col-md-7"><input id="nama_satuan_pendidikan" type="text" class="form-control" disabled placeholder="nama_satuan_pendidikan" name="nama_satuan_pendidikan" value="{{$data->nama}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="jenjang2">Jenjang2</label><div class="col-sm-12 col-md-7"><input id="jenjang2" type="text" class="form-control" placeholder="jenjang2" disabled name="jenjang2" value="{{$data->jenjang2}}"></div></div>
                            {{-- if swasta {diberi input ijop, tgl berlaku ijop (mulai, sampai dengan)} --}}
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="status">Status</label><div class="col-sm-12 col-md-7"><input id="status" type="text" class="form-control" placeholder="status" disabled name="status" value="{{$data->status}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="alamat">Alamat</label><div class="col-sm-12 col-md-7"><input id="alamat" type="text" class="form-control" placeholder="alamat" name="alamat" value="{{$data->alamat}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kelurahan">Kelurahan</label><div class="col-sm-12 col-md-7"><input id="kelurahan" type="text" class="form-control" placeholder="kelurahan" name="kelurahan" value="{{$data->kelurahan}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kecamatan">Kecamatan</label><div class="col-sm-12 col-md-7"><input id="kecamatan" type="text" class="form-control" placeholder="kecamatan" name="kecamatan" value="{{$data->kecamatan}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kab_kota">Kab./Kota</label><div class="col-sm-12 col-md-7"><input id="kab_kota" type="text" class="form-control" disabled placeholder="kab_kota" name="kab_kota" value="{{$data->kab_kota}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="lokasi">Lokasi</label><div class="col-sm-12 col-md-7"><input id="lokasi" type="text" class="form-control" disabled placeholder="lokasi" name="lokasi" value="{{$data->lokasi}}"></div></div>
                           {{-- kurang form nama+nohp kepsek nama+nohp penanggung jawab akreditasi  --}}
                        
                        </div>
                        <div class="col-6">
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="tahun_akre">Tahun akre</label><div class="col-sm-12 col-md-7"><input id="tahun_akre" type="text" class="form-control" placeholder="tahun_akre" disabled name="tahun_akre" value="{{$data->tahun_akre}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="nilai_akhir">NA</label><div class="col-sm-12 col-md-7"><input id="nilai_akhir" type="text" class="form-control" placeholder="nilai_akhir" disabled name="nilai_akhir" value="{{$data->nilai_akhir}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="peringkat">Peringkat</label><div class="col-sm-12 col-md-7"><input id="peringkat" type="text" class="form-control" placeholder="peringkat" disabled name="peringkat" value="{{$data->peringkat}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="no_sk">NO SK</label><div class="col-sm-12 col-md-7"><input id="no_sk" type="text" class="form-control" placeholder="no_sk" name="no_sk" disabled value="{{$data->no_sk}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="tgl_sk">TGL SK</label><div class="col-sm-12 col-md-7"><input id="tgl_sk" type="text" class="form-control" placeholder="tgl_sk" name="tgl_sk" disabled value="{{$data->tgl_sk}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="status_sasaran">STATUS SASARAN</label><div class="col-sm-12 col-md-7"><input id="status_sasaran" type="text" class="form-control" disabled placeholder="status_sasaran" name="status_sasaran" value="{{$data->status_sasaran}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="tahap_visit">Tahap Visit</label><div class="col-sm-12 col-md-7"><input id="tahap_visit" type="text" class="form-control" disabled placeholder="tahap_visit" name="tahap_visit" value="{{$data->tahap_visit}}"></div></div>
                            {{-- //if bt { dikasih input kelas berapa } --}}
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kelas">KELAS (SASARAN BT)</label><div class="col-sm-12 col-md-7"><input id="kelas" type="text" class="form-control" placeholder="kelas" name="kelas" value="{{$data->kelas}}"></div></div>
                            <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="kuota_bt">KUOTA BT</label><div class="col-sm-12 col-md-7"><input id="kuota_bt" type="text" class="form-control" placeholder="kuota_bt" name="kuota_bt" value="{{$data->kuota_bt}}"></div></div>
    
                        </div>
                      

                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>

</div>
</div>
@endsection
