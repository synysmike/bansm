@extends('ad_layout.wrapper')
@push('css-custom')
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/admin_theme/library/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/admin_theme/library/selectric/public/selectric.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endpush

@section('admin-container')
    <section class="section">
        <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Advanced Forms</div>
            </div>
        </div>

        <div class="section-body">


            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <form id="id-form" enctype="multipart/form-data">
                            <div class="col-md-8 col-lg-8">
                                <div class="section-title">Config table</div>
                                <div class="form-group">
                                    <label>Pilih nama tabel</label>
                                    <p>Field form terpasang : @php
                                        $tabels = explode('),(', $data->tabel);
                                        foreach ($tabels as $tabel) {
                                            echo $tabel . ', ';
                                        }
                                    @endphp</p>
                                    <select name="tabel[]" class="form-control selectric" multiple="multiple">
                                        <option value=''>-- Pilih field --</option>
                                        <option value='npsn'>npsn</option>
                                        <option value='nia'>nia</option>
                                        <option value='nama'>nama</option>
                                        <option value='nama_lembaga'>nama_lembaga</option>
                                        <option value='hp'>hp</option>
                                        <option value='kabkota'>kabkota</option>
                                        <option value='unsur'>unsur</option>
                                        <option value='unit'>unit</option>
                                        <option value='jabatan'>jabatan</option>
                                        <option value='alamat_kantor'>alamat_kantor</option>
                                        <option value='alamat_rumah'>alamat_rumah</option>
                                        <option value='nama_bank'>nama_bank</option>
                                        <option value='norek'>norek</option>
                                        <option value='fotorek'>fotorek</option>
                                        <option value='npwp'>npwp</option>
                                        <option value='kelas'>kelas</option>
                                        <option value='nama_bank'>nama_bank</option>
                                        <option value='kesanggupan'>kesanggupan</option>
                                        <option value='pernyataan'>pernyataan</option>
                                        <option value='surat_sehat'>surat_sehat</option>
                                        <option value='surat_tugas'>surat_tugas</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-8">
                                <div class="section-title">Config form</div>
                                <div class="form-group">
                                    <label>Set judul form</label>
                                    <input class='form-control' type="text" name="judul" id="judul"
                                        value='{{ $data->judul }}'>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Form</label>
                                    <input class='form-control' type="text" name="kat" id="kat"
                                        value='{{ $data->kategori }}'>
                                </div>
                                <div class="form-group">
                                    <label>link controller</label>
                                    <input class='form-control' type="text" name="link" id="link"
                                        value='{{ $data->link }}'>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="btn-save" class="btn btn-info"> Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js-custom')
    <!-- JS Libraies -->

    <script src="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/admin_theme/library/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/admin_theme/library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="/admin_theme/library/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="/admin_theme/library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="/admin_theme/library/select2/dist/js/select2.full.min.js"></script>
    <script src="/admin_theme/library/selectric/public/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="/admin_theme/js/page/forms-advanced-forms.js"></script> --}}


    <script>
        $(document).ready(function() {
            $(document).on('submit', '#id-form', function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "/settable",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $('#id-form').trigger(
                            "reset");
                        $('#btn-save').html('Tersimpan');
                        //Reload Total Finansial Planing
                        swal("Berhasil",
                            "Berkas telah tersimpan",
                            "success");

                    },
                    error: function(data) {
                        console.log('Error', data);

                    }
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
@endpush
