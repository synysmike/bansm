@extends('ad_layout.wrapper')
@push('css-custom')
    <link rel="stylesheet" href="admin_theme/library/datatables/media/css/jquery.dataTables.min.css">
@endpush
@section('admin-container')
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $tittle }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> No. </th>
                                            <th class="text-center">NPSN</th>
                                            <th class="text-center">Nama Lembaga</th>
                                            <th class="text-center">Jenjang</th>
                                            <th class="text-center">Kab./Kota</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" tabindex="-1" role="dialog" id="modal-show">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="tittle" class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='npsn'>NPSN</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='npsn' type='text'
                                        class='form-control' placeholder='npsn' name='npsn' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='nama_satuan_pendidikan'>Nama Satuan Pendidikan</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='nama_satuan_pendidikan' type='text'
                                        class='form-control' placeholder='nama_satuan_pendidikan'
                                        name='nama_satuan_pendidikan' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='jenjang2'>Jenjang</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='jenjang2' type='text'
                                        class='form-control' placeholder='jenjang2' name='jenjang2' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='status'>Status</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='status' type='text'
                                        class='form-control' placeholder='status' name='status' value=''>
                                </div>
                            </div>
                            {{-- if swasta {diberi input ijop, tgl berlaku ijop (mulai, sampai dengan)} --}}
                            {{-- kurang form nama+nohp kepsek nama+nohp penanggung jawab akreditasi  --}}
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='kab_kota'>Kab./Kota</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='kab_kota' type='text'
                                        class='form-control' placeholder='kab_kota' name='kab_kota' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='kecamatan'>Kecamatan</label>
                                <div class='col-sm-12 col-md-7'> <input id='kecamatan' type='text' class='form-control'
                                        placeholder='kecamatan' name='kecamatan' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'>
                                <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kelurahan'>
                                    Kelurahan
                                </label>
                                <div class='col-sm-12 col-md-7'> <input id='kelurahan' type='text'
                                        class='form-control' placeholder='kelurahan' name='kelurahan' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='alamat'> Alamat
                                </label>
                                <div class='col-sm-12 col-md-7'> <input id='alamat' type='text'
                                        class='form-control' placeholder='alamat' name='alamat' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> 
                                <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'for='namaks'>
                                Nama Kepala Sekolah
                            </label>
                            <div class='col-sm-12 col-md-7'>
                                <input id='namaks' type='text' class='form-control' placeholder='Nama Kepala Sekolah' name='namaks' value=''>
                            </div>
                        </div>
                        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='hpks'>
                                No HP Kepala Sekolah
                            </label>
                            <div class='col-sm-12 col-md-7'>
                                <input id='hpks' type='text' class='form-control' placeholder='No HP Kepala Sekolah' name='hpks' value=''>
                            </div>
                        </div>
                        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                for='namapj'>
                                Nama Penanggung Jawab Akreditasi
                            </label>
                            <div class='col-sm-12 col-md-7'>
                                <input id='namapj type='text' class='form-control' placeholder='Nama Penanggung Jawab Akreditasi' name='namapj value=''>
                            </div>
                        </div>
                        <div class='form-group row mb-4'> <label class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                for='hppj'>
                                No HP Penanggung Jawab Akreditasi
                            </label>
                            <div class='col-sm-12 col-md-7'>
                                <input id='hppj' type='text' class='form-control' placeholder='No HP Penanggung Jawab Akreditasi' name='hppj' value=''>
                            </div>
                        </div>
                        </div>
                        <div class="col-6">
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='lokasi'>Lokasi</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='lokasi' type='text'
                                        class='form-control' placeholder='lokasi' name='lokasi' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='tahun_akre'>Tahun
                                    akre</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='tahun_akre' type='text'
                                        class='form-control' placeholder='tahun_akre' name='tahun_akre' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='nilai_akhir'>NA</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='nilai_akhir' type='text'
                                        class='form-control' placeholder='nilai_akhir' name='nilai_akhir'
                                        value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='peringkat'>Peringkat</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='peringkat' type='text'
                                        class='form-control' placeholder='peringkat' name='peringkat' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='no_sk'>NO
                                    SK</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='no_sk' type='text'
                                        class='form-control' placeholder='no_sk' name='no_sk' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='tgl_sk'>TGL
                                    SK</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='tgl_sk' type='text'
                                        class='form-control' placeholder='tgl_sk' name='tgl_sk' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3'
                                    for='status_sasaran'>STATUS SASARAN</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='status_sasaran' type='text'
                                        class='form-control' placeholder='status_sasaran' name='status_sasaran'
                                        value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='tahap_visit'>Tahap
                                    Visit</label>
                                <div class='col-sm-12 col-md-7'> <input disabled id='tahap_visit' type='text'
                                        class='form-control' placeholder='tahap_visit' name='tahap_visit'
                                        value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kelas'>KELAS Terakhir
                                    (SASARAN
                                    BT)</label>
                                <div class='col-sm-12 col-md-7'> <input id='kelas' type='text'
                                        class='form-control' placeholder='kelas' name='kelas' value=''>
                                </div>
                            </div>
                            <div class='form-group row mb-4'> <label
                                    class='col-form-label text-md-right col-12 col-md-3 col-lg-3' for='kuota_bt'>KUOTA
                                    BT</label>
                                <div class='col-sm-12 col-md-7'> <input id='kuota_bt' type='text'
                                        class='form-control' placeholder='kuota_bt' name='kuota_bt' value=''>
                                </div>
                            </div>
                            {{-- //if bt { dikasih input kelas berapa } --}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js-custom')
    <script src="admin_theme/library/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin_theme/library/jquery-ui-dist/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    {{-- <script src="admin_theme/js/page/bootstrap-modal.js"></script> --}}
    <script>
        $(document).ready(function() {
            //datatable
            $('#table-1').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "/sekolah", // ambil data
                    type: 'GET'
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'npsn',
                        name: 'npsn'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'jenjang1',
                        name: 'jenjang1'
                    },
                    {
                        data: 'kab_kota',
                        name: 'kab_kota'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },

                    {
                        data: 'aksi',
                        name: 'aksi'
                    }
                ],
            });
            // modal
            $(document).on('click', '.show-btn', function() {
                var data_id = $(this).data('id');
                $.get("/sekolah/" + data_id, function(data) {
                    // $("#modal-judul").html("Edit Data");
                    // $("tombol-simpan").val("edit-post");
                    $("#modal-show").modal('show');
                    $('#tittle').text(data.nama);
                    $('#no').val(data.no);
                    $('#npsn').val(data.npsn);
                    $('#nama_satuan_pendidikan').val(data.nama);
                    $('#jenjang1').val(data.jenjang1);
                    $('#jenjang2').val(data.jenjang2);
                    $('#status').val(data.status);
                    $('#alamat').val(data.alamat);
                    $('#kelurahan').val(data.kelurahan);
                    $('#kecamatan').val(data.kecamatan);
                    $('#kab_kota').val(data.kab_kota);
                    $('#lokasi').val(data.lokasi);
                    $('#tahun_akre').val(data.tahun_akre);
                    $('#nilai_akhir').val(data.nilai_akhir);
                    $('#peringkat').val(data.peringkat);
                    $('#no_sk').val(data.no_sk);
                    $('#tgl_sk').val(data.tgl_sk);
                    $('#status_sasaran').val(data.status_sasaran);
                    $('#tahap_visit').val(data.tahap_visit);
                    $('#kelas').val(data.kelas);
                    $('#kuota_bt').val(data.kuota_bt);
                });
            });
        });
    </script>
@endpush
