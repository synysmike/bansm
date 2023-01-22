<div class="row">
    <div class="col-6">
        <div class='form-group row mb-4'>
            <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='npsn'>
                NPSN
            </label>
            <div class='col-sm-12 col-md-7'>
                <input disabled id='npsn' type='text' class='form-control' placeholder='npsn' name='npsn' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'>
            <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='nama_satuan_pendidikan'>
                Nama Satuan Pendidikan
            </label>
            <div class='col-sm-12 col-md-7'>
                <input disabled id='nama_satuan_pendidikan' type='text' class='form-control'
                    placeholder='nama_satuan_pendidikan' name='nama_satuan_pendidikan' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'>
            <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='jenjang2'>
                Jenjang
            </label>
            <div class='col-sm-12 col-md-7'>
                <input disabled id='jenjang2' type='text' class='form-control' placeholder='jenjang2' name='jenjang2'
                    value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='status'>
                Status
            </label>
            <div class='col-sm-12 col-md-7'><input disabled id='status' type='text' class='form-control'
                    placeholder='status' name='status' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='kab_kota'>Kab./Kota</label>
            <div class='col-sm-12 col-md-7'><input disabled id='kab_kota' type='text' class='form-control'
                    placeholder='kab_kota' name='kab_kota' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='kecamatan'>Kecamatan</label>
            <div class='col-sm-12 col-md-7'><input id='kecamatan' type='text' class='form-control'
                    placeholder='kecamatan' name='kecamatan' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'>
            <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kelurahan'>
                Kelurahan
            </label>
            <div class='col-sm-12 col-md-7'>
                <input id='kelurahan' type='text' class='form-control' placeholder='kelurahan' name='kelurahan'
                    value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='alamat'>
                Alamat
            </label>
            <div class='col-sm-12 col-md-7'>
                <input id='alamat' type='text' class='form-control' placeholder='alamat' name='alamat' value=''>
            </div>
        </div>
        <div class='form-group row mb-4'>
            <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='namaks'>
                Nama Kepala Sekolah
            </label>
            <div class='col-sm-12 col-md-7'>
                <input id='namaks' type='text' class='form-control' placeholder='Nama Kepala Sekolah' name='namaks'
                    value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='hpks'>
                No HP Kepala Sekolah
            </label>
            <div class='col-sm-12 col-md-7'>
                <input id='hpks' type='text' class='form-control' placeholder='No HP Kepala Sekolah' name='hpks'
                    value=''>
            </div>
        </div>
        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                for='namapj'>
                Nama Penanggung Jawab Akreditasi
            </label>
            <div class='col-sm-12 col-md-7'>
                <input id='namapj type=' text' class='form-control' placeholder='Nama Penanggung Jawab Akreditasi'
                    name='namapj value=''>
            </div>
        </div>
        <div class=' form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='hppj'>
                    No HP Penanggung Jawab Akreditasi
                </label>
                <div class='col-sm-12 col-md-7'>
                    <input id='hppj' type='text' class='form-control' placeholder='No HP Penanggung Jawab Akreditasi'
                        name='hppj' value=''>
                </div>
            </div>
            {{-- if swasta {diberi input ijop, tgl berlaku ijop (mulai, sampai dengan)} --}}
            {{-- kurang form nama+nohp kepsek nama+nohp penanggung jawab akreditasi  --}}

        </div>
        <div class="col-6">
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='lokasi'>Unggah Ijop</label>
                <div class='col-sm-12 col-md-7'>
                    <input id='ijop' type='file' class='form-control' placeholder='ijop' name='ijop' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='lokasi'>Masa Berlaku Ijop</label>
                <div class='col-sm-12 col-md-7'>
                    <input id='masa_ijop' type='input' class='form-control datepicker' placeholder='masa_ijop'
                        name='masa_ijop' value=''>
                </div>
            </div>

            {{-- <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan Lembaga tutup</label>
                <div class="col-sm-12 col-md-7">
                    <textarea name="keterangan" class="summernote-simple"></textarea>
                </div>
            </div> --}}
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='lokasi'>Lokasi</label>
                <div class='col-sm-12 col-md-7'>
                    <input disabled id='lokasi' type='text' class='form-control' placeholder='lokasi' name='lokasi'
                        value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='tahun_akre'>Tahunakre</label>
                <div class='col-sm-12 col-md-7'><input disabled id='tahun_akre' type='text' class='form-control'
                        placeholder='tahun_akre' name='tahun_akre' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='nilai_akhir'>NA</label>
                <div class='col-sm-12 col-md-7'><input disabled id='nilai_akhir' type='text' class='form-control'
                        placeholder='nilai_akhir' name='nilai_akhir' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='peringkat'>Peringkat</label>
                <div class='col-sm-12 col-md-7'><input disabled id='peringkat' type='text' class='form-control'
                        placeholder='peringkat' name='peringkat' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='no_sk'>NOSK</label>
                <div class='col-sm-12 col-md-7'><input disabled id='no_sk' type='text' class='form-control'
                        placeholder='no_sk' name='no_sk' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='tgl_sk'>TGLSK</label>
                <div class='col-sm-12 col-md-7'><input disabled id='tgl_sk' type='text' class='form-control'
                        placeholder='tgl_sk' name='tgl_sk' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='status_sasaran'>STATUS
                    SASARAN</label>
                <div class='col-sm-12 col-md-7'><input disabled id='status_sasaran' type='text' class='form-control'
                        placeholder='status_sasaran' name='status_sasaran' value=''></div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='tahap_visit'>Tahap Visit</label>
                <div class='col-sm-12 col-md-7'><input disabled id='tahap_visit' type='text' class='form-control'
                        placeholder='tahap_visit' name='tahap_visit' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='kelas'>KELAS Terakhir (SASARAN BT)</label>
                <div class='col-sm-12 col-md-7'><input id='kelas' type='text' class='form-control' placeholder='kelas'
                        name='kelas' value=''>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='kuota_bt'>KUOTABT</label>
                <div class='col-sm-12 col-md-7'><input id='kuota_bt' type='text' class='form-control'
                        placeholder='kuota_bt' name='kuota_bt' value=''>
                </div>
            </div>
            {{-- //if bt { dikasih input kelas berapa } --}}
        </div>
    </div>
