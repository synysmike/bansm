@extends('ad_layout.wrapper')
@push('css-custom')
    <link rel="stylesheet" href="admin_theme/library/datatables/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/admin_theme/library/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.css">
@endpush
@section('admin-container')
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>ketik jenjang yang anda ingin tampilkan di kolom pencarian untuk menampilkan daftar jenjang
                                yang akan anda edit</h4>
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
                                            <th class="text-center">Status Lembaga</th>
                                            <th class="text-center">Peringkat</th>
                                            <th class="text-center">Kelas Terakhir</th>
                                            <th class="text-center">Kondisi Lembaga</th>
                                            <th class="text-center">Status Pengisian</th>
                                        </tr>
                                    </thead>
                                    <tbody> </tbody>
                                </table>
                                <table class="table-striped table" id="table-2">

                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">NPSN</th>
                                            <th rowspan="2">Nama Sekolah</th>
                                            <th rowspan="2">Jenjang</th>
                                            <th rowspan="2">Provinsi</th>
                                            <th rowspan="2">Kab/Kota</th>
                                            <th rowspan="2">Tahun Ajuan</th>
                                            <th colspan="5">Unggahan</td>
                                            <th rowspan="2">Status</th>
                                            <th rowspan="2">Approval</th>
                                        </tr>
                                        <tr>
                                            <th>S.A</th>
                                            <th>SK/IJOP</th>
                                            <th>S.S</th>
                                            <th>N.K</th>
                                            <th><i class="fas fa-mobile-alt"></i>/<i class="fab fa-whatsapp"></i></th>
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
@endsection

@push('js-custom')
    <script src="admin_theme/library/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="/admin_theme/library/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="admin_theme/library/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/admin_theme/library/summernote/dist/summernote-bs4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>
    <!-- Page Specific JS File -->
    {{-- <script src="admin_theme/js/page/bootstrap-modal.js"></script> --}}
    <script>
        $(document).ready(function() {
            //datatable yajra

            $('#table-2').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "https://bansm.kemdikbud.go.id/sispena2020/sasaran/re/ajax_list",
                    "type": "get"
                },
                "lengthMenu": [
                    [10, 25, 50, 100, 250, 500, 1000, -1],
                    [10, 25, 50, 100, 250, 500, 1000, "All"]
                ]
            });

            var table = $('#table-1').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "/admin", // ambil data
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
                        data: 'jenjang2',
                        name: 'jenjang2'
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
                        data: 'peringkat',
                        name: 'peringkat'
                    },

                    {
                        data: 'kelas',
                        name: 'kelas'
                    },
                    {
                        data: 'kondisi',
                        name: 'kondisi'
                    },
                    {
                        data: 'mengisi',
                        name: 'mengisi'
                    }
                ],
                aLengthMenu: [
                    [10, 50, 100, 200, -1],
                    [10, 50, 100, 200, "All"]
                ],
                iDisplayLength: 10,
                // dom: 'Bfrtip'

            });
            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    'copy', 'excel'
                ],

            });

            table.buttons(0, null).container().prependTo(
                table.table().container()
            );


        });













        $(document).ready(function() {
            $('#sasaran').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "https://bansm.kemdikbud.go.id/sispena2020/sasaran/re/ajax_list",
                    "type": "post"
                },
                "lengthMenu": [
                    [10, 25, 50, 100, 250, 500, 1000, -1],
                    [10, 25, 50, 100, 250, 500, 1000, "All"]
                ]
            });



            $('#sasaran table').removeAttr('style');
            
            $('#form_ubah_data_sasaran [name="ubah_peringkat"]').change(function() {
                if (this.value === "BT" || this.value === "TT") {
                    $('#test').css('display', 'none');
                    $('#save_ubah_data_sasaran').removeAttr('disabled');
                } else if (this.value != $('[name="old_peringkat"]').val()) {
                    $('#test').css('display', 'inline');
                    $('#save_ubah_data_sasaran').css('display', 'block').attr('disabled', true);
                } else {
                    $('#test').css('display', 'none');
                    $('#save_ubah_data_sasaran').removeAttr('disabled');
                }
            });


            $('#form_ubah_data_sasaran [name="ubah_tahun"]').change(function() {
                if ($('[name="ubah_peringkat"]').val() === "BT" || $('[name="ubah_peringkat"]').val() ===
                    "TT") {
                    $('#test').css('display', 'none');
                    $('#save_ubah_data_sasaran').removeAttr('disabled');
                } else if (this.value != $('[name="old_tahun"]').val()) {
                    $('#test').css('display', 'inline');
                } else {
                    $('#test').css('display', 'none');
                }
            });

            bsCustomFileInput.init();
            var bar = $('.progress-bar');
            var percent = $('.percent');
            var status = $('#status');

            $('#form_upload_scan').ajaxForm({
                beforeSend: function() {
                    $('.progress').css('display', 'block');
                    status.empty();
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                success: function() {
                    var percentVal = '100%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    status.html(xhr.responseText);
                    $('#save_ubah_data_sasaran').removeAttr('disabled');
                }
            });

            $('#form_ubah_data_sasaran').ajaxForm();
            $('#save_ubah_data_sasaran').click(function() {
                $('#content_ubah_data_sasaran').prepend(
                    '<div id="overlay" class="overlay d-flex justify-content-center align-items-center"><i class="fas fa-2x fa-sync fa-spin"></i></div>'
                    );
                var option = {
                    success: showResponse
                };
                $('#form_ubah_data_sasaran').ajaxSubmit(option);
                return false;
            });

            function showResponse(responseText, statusText, xhr, $form) {
                $('#overlay').remove();
                $('#modal_ubah_data_sasaran').modal('hide');
                $('#sasaran').DataTable().ajax.reload();
            }

            $('#tambah_sasaran').click(function() {
                $('#form_tambah_data_sasaran').trigger('reset');
                $('#modal_tambah_data_sasaran').modal('show');
            })

            $('#form_tambah_data_sasaran [name="tambah_peringkat"]').change(function() {
                if (this.value === "BT" || this.value === "TT") {
                    $('#tambah_unggah').css('display', 'none');
                    $('#save_tambah_data_sasaran').removeAttr('disabled');
                } else if (this.value != $('[name="old_peringkat"]').val()) {
                    $('#tambah_unggah').css('display', 'inline');
                    $('#save_tambah_data_sasaran').css('display', 'block').attr('disabled', true);
                } else {
                    $('#tambah_unggah').css('display', 'none');
                    $('#save_tambah_data_sasaran').removeAttr('disabled');
                }
            });

            $('#form_tambah_data_sasaran [name="tambah_tahun"]').change(function() {
                if ($('[name="tambah_peringkat"]').val() === "BT" || $('[name="tambah_peringkat"]')
                .val() === "TT") {
                    $('#tambah_unggah').css('display', 'none');
                    $('#save_tambah_data_sasaran').removeAttr('disabled');
                } else if (this.value != $('[name="old_tahun"]').val()) {
                    $('#tambah_unggah').css('display', 'inline');
                } else {
                    $('#tambah_unggah').css('display', 'none');
                }
            });

            $('#save_tambah_data_sasaran').click(function() {
                $('#content_tambah_data_sasaran').prepend(
                    '<div id="overlay" class="overlay d-flex justify-content-center align-items-center"><i class="fas fa-2x fa-sync fa-spin"></i></div>'
                    );
                var option = {
                    success: showResponseTambah
                };
                $('#form_tambah_data_sasaran').ajaxSubmit(option);
                return false;
            });

            function showResponseTambah(responseText, statusText, xhr, $form) {
                $('#overlay').remove();
                $('#modal_tambah_data_sasaran').modal('hide');
                $('#sasaran').DataTable().ajax.reload();
            }

            var options = {
                url: function(phrase) {
                    return "https://bansm.kemdikbud.go.id/sispena2020/sasaran/cari_npsn";
                },

                getValue: function(element) {
                    return element.label;
                },

                ajaxSettings: {
                    dataType: "json",
                    method: "POST",
                    data: {
                        dataType: "json"
                    }
                },
                list: {
                    match: {
                        enabled: true
                    },
                    onClickEvent: function() {
                        var value = $('#npsn').getSelectedItemData().npsn;
                        $('#h_npsn').val(value).trigger('change');
                    }
                },

                //preparePostData: function(data) {
                // data.phrase = $("#npsn").val();
                // return data;
                //},

                //requestDelay: 400,
                adjustWidth: 100
            };

            $("#npsn").easyAutocomplete(options);
        });

        function ganti_status(param, id) {
            window.location.href = "https://bansm.kemdikbud.go.id/sispena2020/sasaran/ganti_status/" + param + "/" + id;
        }

        function ubah_sasaran(sekolah_id) {
            $("#form_ubah_data_sasaran").trigger('reset');
            $.ajax({
                url: 'https://bansm.kemdikbud.go.id/sispena2020/sasaran/ubah_sasaran/' + sekolah_id,
                type: 'get',
                dataType: 'json',
                success: function(data) {
                    var tahun, peringkat;
                    if (data.peringkat_perbaikan) {
                        peringkat = data.peringkat_perbaikan;
                    } else {
                        peringkat = data.peringkat;
                    }
                    if (data.tahun_perbaikan) {
                        tahun = data.tahun_perbaikan;
                    } else {
                        tahun = data.tahun;
                    }
                    $('#form_ubah_data_sasaran [name="sekolah_id"]').val(sekolah_id);
                    $('#form_ubah_data_sasaran [name="npsn"]').val(data.npsn);
                    $('#form_ubah_data_sasaran [name="ubah_peringkat"]').val(peringkat);
                    $('#form_ubah_data_sasaran [name="ubah_peringkat"] option:selected').attr('selected',
                        'selected');
                    $('#form_ubah_data_sasaran [name="ubah_tahun"]').val(tahun);
                    $('#form_ubah_data_sasaran [name="ubah_tahun"] option:selected').attr('selected',
                        'selected');
                    $('#form_ubah_data_sasaran [name="old_peringkat"]').val(peringkat);
                    $('#form_ubah_data_sasaran [name="old_tahun"]').val(tahun);
                    $('#modal_ubah_data_sasaran').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
@endpush
