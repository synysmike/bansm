@extends('ad_layout.wrapper')
@push('css-custom')
<link rel="stylesheet" href="/admin_theme/library/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.css">
@endpush
@section('admin-container')
<section class="section">
    <div class="section-header">
        <h1>{{  auth()->user()->name  }} ({{ auth()->user()->username }})</h1>
    </div>
</section>
<form id="id-form" action="{{ route('detilsekolah.store') }}" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6">
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='npsn'>NPSN</label>
                <div class='col-sm-12 col-md-7'>
                    <input id='id' type='hidden' class='form-control' placeholder='npsn' name='id'
                        value='{{ $unit->id }}'>
                    <input disabled id='npsn' type='text' class='form-control' placeholder='npsn' name='npsn'
                        value='{{ $unit->npsn }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='nama_satuan_pendidikan'>Nama Satuan Pendidikan</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='nama_satuan_pendidikan' type='text'
                        class='form-control' placeholder='nama_satuan_pendidikan' name='nama_satuan_pendidikan'
                        value='{{ $unit->nama }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='jenjang2'>Jenjang</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='jenjang2' type='text' class='form-control'
                        placeholder='jenjang2' name='jenjang2' value='{{ $unit->jenjang2 }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='status'>Status</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='status' type='text' class='form-control'
                        placeholder='status' name='status' value='{{ $unit->status}}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='lokasi'>Lokasi</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='lokasi' type='text' class='form-control'
                        placeholder='lokasi' name='lokasi' value='{{ $unit->lokasi }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='tahun_akre'>Tahun
                    akre</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='tahun_akre' type='text' class='form-control'
                        placeholder='tahun_akre' name='tahun_akre' value='{{ $unit->tahun_akre }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='nilai_akhir'>NA</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='nilai_akhir' type='text' class='form-control'
                        placeholder='nilai_akhir' name='nilai_akhir' value='{{ $unit->nilai_akhir }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='peringkat'>Peringkat</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='peringkat' type='text' class='form-control'
                        placeholder='peringkat' name='peringkat' value='{{ $unit->peringkat }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='no_sk'>NO
                    SK</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='no_sk' type='text' class='form-control'
                        placeholder='no_sk' name='no_sk' value='{{ $unit->no_sk }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='tgl_sk'>TGL
                    SK</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='tgl_sk' type='text' class='form-control'
                        placeholder='tgl_sk' name='tgl_sk' value='{{ $unit->tgl_sk }}'>
                </div>
            </div>
            {{-- <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
            for='status_sasaran'>STATUS SASARAN</label>
        <div class='col-sm-12 col-md-7'> <input disabled id='status_sasaran' type='text' class='form-control'
                placeholder='status_sasaran' name='status_sasaran' value=''>
        </div>
    </div> --}}
            {{-- <div class='form-group row mb-4'> <label
                            class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                            for='tahap_visit'>Tahap
                            Visit</label>
                        <div class='col-sm-12 col-md-7'> <input disabled id='tahap_visit' type='text'
                                class='form-control' placeholder='tahap_visit' name='tahap_visit' value=''>
                        </div>
                    </div> --}}
            {{-- if swasta {diberi input ijop, tgl berlaku ijop (mulai, sampai dengan)} --}}
            {{-- kurang form nama+nohp kepsek nama+nohp penanggung jawab akreditasi  --}}
        </div>
        <div class="col-6">
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='kab_kota'>Kab./Kota</label>
                <div class='col-sm-12 col-md-7'> <input disabled id='kab_kota' type='text' class='form-control'
                        placeholder='kab_kota' name='kab_kota' value='{{ $unit->kab_kota }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='kecamatan'>Kecamatan</label>
                <div class='col-sm-12 col-md-7'> <input id='kecamatan' type='text' class='form-control'
                        placeholder='kecamatan' name='kecamatan' value='{{ $unit->kecamatan }}'>
                    @error('kecamatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class='form-group row mb-4'>
                <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kelurahan'>
                    Kelurahan
                </label>
                <div class='col-sm-12 col-md-7'> <input id='kelurahan' type='text' class='form-control'
                        placeholder='kelurahan' name='kelurahan' value='{{ $unit->kelurahan }}'>
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='alamat'>
                    Alamat
                </label>
                <div class='col-sm-12 col-md-7'> <input id='alamat' type='text' class='form-control'
                        placeholder='alamat' name='alamat' value='{{ $unit->alamat }}'>
                </div>
            </div>
            <div class='form-group row mb-4'>
                <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='namaks'>
                    Nama Kepala Sekolah
                </label>
                <div class='col-sm-12 col-md-7'>
                    <input id='namaks' type='text' class='form-control' placeholder='Nama Kepala Sekolah' name='namaks'
                        value='{{ $unit->namaks }}'>
                    @error('namaks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='hpks'>
                    No HP Kepala Sekolah
                </label>
                <div class='col-sm-12 col-md-7'>
                    <input id='hpks' type='text' class='form-control' placeholder='No HP Kepala Sekolah' name='hpks'
                        value='{{ $unit->no_ks }}'>
                    @error('hpks')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='namapj'>
                    Nama Penanggung Jawab Akreditasi
                </label>
                <div class='col-sm-12 col-md-7'>
                    <input id='namapj' type=' text' class='form-control' placeholder='Nama Penanggung Jawab Akreditasi'
                        name='namapj' value='{{ $unit->namapj }}'>
                </div>
            </div>
            <div class=' form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                    for='hppj'>
                    No HP Penanggung Jawab Akreditasi
                </label>
                <div class='col-sm-12 col-md-7'>
                    <input id='hppj' type='text' class='form-control' placeholder='No HP Penanggung Jawab Akreditasi'
                        name='hppj' value='{{ $unit->hppj }}'>
                </div>
            </div>
            {{-- kasih if sekolah negeri disini --}}
            <div id="collapse1" class='form-group row mb-4'> <label
                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='lokasi'>Unggah
                    Ijop</label>
                <div class='col-sm-12 col-md-7'>
                    <input id='ijop' type='file' class='form-control' placeholder='ijop' name='ijop' value=''>
                </div>
            </div>
            <div id="collapse2" class='form-group row mb-4'> <label class='col-form-label ' for='lokasi'>Masa
                    Berakhir Ijop</label>
                <div class='col-sm-12 col-md-7'>
                    <input id='masa_ijop' type='input' class='form-control datepicker' placeholder='masa_ijop'
                        name='masa_ijop' value='{{ $unit->masa }}'>
                </div>
            </div>
            <div class='form-group row mb-4'>
                <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='status'>Kondisi
                    Lembaga</label>
                <div class='col-sm-12 col-md-7'>
                    <div class="col-md12">
                        <input checked="" type="radio" id="kondisi1" value="1" name="kondisi"
                            class="form-control-input">
                        <label class="col-form-label" for="kondisi1">Masih Buka</label>
                    </div>
                    <div class="col-md12">
                        <input checked="" type="radio" id="kondisi2" value="0" name="kondisi"
                            class="form-control-input">
                        <label class="col-form-label " for="kondisi2">Sudah Tutup</label>
                    </div>
                </div>
            </div>
            <div id="div-keterangan" class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan
                    Lembaga
                    tutup</label>
                <div class="col-sm-12 col-md-7">
                    <textarea name="keterangan" class="summernote-simple">{{ $unit->keterangan }}</textarea>
                </div>
            </div>

            <div id="field_bt" class='form-group row mb-4'> <label
                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kelas'>KELAS
                    Terakhir (Khusus Sasaran BT)</label>
                <div class='col-sm-12 col-md-7'>
                    {{-- <input id='kelas' type='text' class='form-control' placeholder='kelas'
                name='kelas' value='{{ $unit->kelas }}'> --}}

                    <select name="kelas" class="form-control row mb-4" id="kelas">
                        <option {{ $unit->kelas === "I" ? 'selected' :''}} value="I">1</option>
                        <option {{ $unit->kelas === "II" ? 'selected' :''}} value="II">2</option>
                        <option {{ $unit->kelas === "III" ? 'selected' :''}} value="III">3</option>
                        <option {{ $unit->kelas === "IV" ? 'selected' :''}} value="IV">4</option>
                        <option {{ $unit->kelas === "V" ? 'selected' :''}} value="V">5</option>
                        <option {{ $unit->kelas === "VI" ? 'selected' :''}} value="VI">6</option>
                        <option {{ $unit->kelas === "VII" ? 'selected' :''}} value="VII">7</option>
                        <option {{ $unit->kelas === "VIII" ? 'selected' :''}} value="VIII">8</option>
                        <option {{ $unit->kelas === "IX" ? 'selected' :''}} value="IX">9</option>
                        <option {{ $unit->kelas === "X" ? 'selected' :''}} value="X">10</option>
                        <option {{ $unit->kelas === "XI" ? 'selected' :''}} value="XI">11</option>
                        <option {{ $unit->kelas === "XII" ? 'selected' :''}} value="XII">12</option>
                    </select>
                </div>
            </div>
            {{-- <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kuota_bt'>KUOTA
                                    BT</label>
                                <div class='col-sm-12 col-md-7'> <input id='kuota_bt' type='text' class='form-control'
                                        placeholder='kuota_bt' name='kuota_bt' value=''>
                                </div>
                            </div> --}}
            {{-- //if bt { dikasih input kelas berapa } --}}
            <button id="form_submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
@endsection
@push('js-custom')
<script src="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/admin_theme/library/sweetalert/dist/sweetalert.min.js"></script>
<script src="/admin_theme/library/summernote/dist/summernote-bs4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>
<!-- Page Specific JS File -->
{{-- <script src="admin_theme/js/page/bootstrap-modal.js"></script> --}}
<script type="text/javascript">
    $(document).ready(function () {

        // trigger page
        $(window).on('load', ShowCurrentTime());
        function ShowCurrentTime() {
            // $('#id-form').trigger("reset");
            // var data_id = $(this).data('id');
            // $.get("/sekolah/" + data_id, function (data) {
            //     $('#tittle').text(data.nama);
            //     $('#no').val(data.no);
            //     $('#id').val(data.id);
            //     $('#npsn').val(data.npsn);
            //     $('#nama_satuan_pendidikan').val(data.nama);
            //     $('#jenjang1').val(data.jenjang1);
            //     $('#jenjang2').val(data.jenjang2);
            //     $('#status').val(data.status);
            //     $('#alamat').val(data.alamat);
            //     $('#kelurahan').val(data.kelurahan);
            //     $('#kecamatan').val(data.kecamatan);
            //     $('#kab_kota').val(data.kab_kota);
            //     $('#lokasi').val(data.lokasi);
            //     $('#tahun_akre').val(data.tahun_akre);
            //     $('#nilai_akhir').val(data.nilai_akhir);
            //     $('#peringkat').val(data.peringkat);
            //     $('#namaks').val(data.namaks);
            //     $('#hpks').val(data.no_ks);
            //     $('#namapj').val(data.namapj);
            //     $('#hppj').val(data.hppj);
            //     $('#no_sk').val(data.no_sk);
            //     $('#tgl_sk').val(data.tgl_sk);
            //     $('#status_sasaran').val(data.status_sasaran);
            //     $('#tahap_visit').val(data.tahap_visit);
            //     var smmrnote = data.keterangan;
            //     $(".summernote-simple").summernote('code', smmrnote);
            //     $('#kuota_bt').val(data.kuota_bt);
            var status = "{{ $unit->status }}";
            var peringkat = "{{ $unit->peringkat }}";

            if (peringkat == "BT") {
                $('#field_bt').show();
            } else {
                $('#field_bt').hide();
            }

            if (status == "NEGERI") {
                $('#collapse1').hide();
                $('#collapse2').hide();
            } else {
                $('#collapse1').show();
                $('#collapse2').show();
            }
            var buka = document.getElementById('kondisi1');
            var tutup = document.getElementById('kondisi2');
            var kondisi = "{{ $unit->kondisi }}";
            // radiobutton
            if (kondisi == 0) {
                tutup.checked = true
                buka.checked = false
            } else {
                tutup.checked = false
                buka.checked = true
            }
            // kolom keterangan (default pas kondisi buka)
            if (tutup.checked) {
                $('#div-keterangan').show();
            } else {
                $('#div-keterangan').hide();
            }
            // kolom keterangan (fungssi klik)
            $('#kondisi1').click(function () {
                $('#div-keterangan').hide();
            });
            $('#kondisi2').click(function () {
                $('#div-keterangan').show();
                //     });
                // klik submit                
            });
            if ($("#id-form").length > 0) {
                    $("#id-form").validate({
                        // validasi mime type
                        rules: {
                            document: {
                                // wajib
                                extension: "pdf", // ekstensi pdf
                                filesize: 2097152, // ukuran file < 2mb
                            }
                        },
                        messages: {
                            document: {
                                required: "Tidak Boleh Kosong",
                                extension: "Mohon mengunggah dokumen berekstensi *pdf"
                            }
                        },
                        submitHandler: function (form) {
                            var actionType = $('#form_submit').val();
                            var formData = new FormData(form);
                            $('#form_submit').html('Menyimpan . .');
                            $.ajax({
                                type: "POST",
                                url: "{{ route('detilsekolah.store') }}",
                                data: formData,
                                dataType: 'json',
                                processData: false,
                                contentType: false,
                                success: function (data) {
                                    
                                    $('#form-tambah-edit').trigger(
                                        "reset");
                                    // $('#modal-show').modal(
                                    //     "hide");
                                    $('#form_submit').html('Simpan');
                                    //Reload Total Finansial Planing
                                    swal("Berhasil",
                                        "Berkas telah tersimpan",
                                        "success");
                                    // refresh yajra datatable
                                    // var oTable = $("#table-1")
                                    //     .dataTable();
                                    // oTable.fnDraw(false);
                                },
                                error: function (data) {
                                    console.log('Error', data);
                                    $('#form_submit').html('Simpan');
                                }
                            });
                        }
                    });
                }
            // cek ukuran file yg diupload
            $.validator.addMethod('filesize', function (value, element, param) {
                    return this.optional(element) || (element.files[0].size <= param)
                },
                'Ukuran dokumen terlalu besar'); // notifikasi apabila file > 2mb

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        }
    });

</script>
@endpush
