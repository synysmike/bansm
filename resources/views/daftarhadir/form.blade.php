<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $judul }}&mdash; BAN-S/M JATIM</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="{{ $judul }}" />
    {{-- <meta property="og:type" content="video.movie" /> --}}
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="/ban.png" />
    <link rel="icon" type="image/x-icon" href="/ban.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="admin_theme/library/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="admin_theme/library/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="admin_theme/css/style.css">
    <link rel="stylesheet" href="admin_theme/css/components.css">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->
</head>

<body>
    <div id="app">
        <div class="modal fade" tabindex="-1" role="dialog" id="modal-show">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>{{ $judul }}</h3>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table-striped table" id="table-1">
                                <thead>
                                    <tr>
                                        @foreach ($theads as $tbh)
                                            <th class="text-center">{{ $tbh }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <!-- Footer -->
                        <div class="login-brand">
                            <img src="/ban.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <!-- Content -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>{{ $judul }} BAN-S/M</h4>
                            </div>

                            <div class="card-body">
                                <form id="id-form" class="needs-validation" novalidate=""
                                    enctype="multipart/form-data">
                                    {!! $kategori !!}
                                    @foreach ($form as $key)
                                        {!! $key->tag_field !!}
                                    @endforeach
                                    <div class="form-group">

                                    </div>
                                </form>
                                <button type="button" class="btn btn-primary btn-icon icon-right"
                                    id="btn-save">simpan</button>
                                {{-- <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button> --}}
                                <button class="btn btn-primary btn-lg trigger--fire-modal-2" id="modal-2">lihat
                                    pengunjung</button>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="simple-footer">
                            Copyright &copy; BAN-S/M Provinsi Jawa Timur by IR.TEGUH
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="admin_theme/library/jquery/dist/jquery.min.js"></script>
    <script src="admin_theme/library/popper.js/dist/umd/popper.js"></script>
    <script src="admin_theme/library/tooltip.js/dist/umd/tooltip.js"></script>
    <script src="admin_theme/library/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="admin_theme/library/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="admin_theme/library/moment/min/moment.min.js"></script>
    <script src="admin_theme/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>

    <script src="{{ asset('admin_theme/library/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('admin_theme/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="admin_theme/library/selectric/public/jquery.selectric.min.js"></script>
    <script src="admin_theme/library/jquery.pwstrength/jquery.pwstrength.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="jq-signature/jq-signature.min.js"></script>
    <script src="admin_theme/js/page/auth-register.js"></script>

    <!-- Template JS File -->
    {{-- <script src="admin_theme/js/scripts.js"></script>
    <script src="admin_theme/js/custom.js"></script> --}}



    <script>
        $(document).ready(function() {



            // for limit number char on phone number
            // $('#btn-save').attr('disabled', true);
            $('.js-signature').jqSignature();
            $('#clearBtn').click(function() {
                $('.js-signature').jqSignature('clearCanvas');
                // $('#btn-save').attr('disabled', true);                
            });

            $('number#title').attr('maxLength', '8').keypress(limitMe);

            function limitMe(e) {
                if (e.keyCode == 8) {
                    return true;
                }
                return this.value.length < $(this).attr("maxLength");
            }



            $('#modal-2').click(function() {
                
                $("#modal-show").modal('show');
                
                // dynamic datatable
                var label = [];
                '@foreach ($unit as $unt)';
                label.push('{!! $unt !!}');
                '@endforeach';

                var columns = [];
                $.each(label, function(key, value) {
                    var my_item = {};
                    my_item.name = value;
                    my_item.data = value;
                    columns.push(my_item);
                });

                // datatable yajra
                var table = $('#table-1').DataTable({
                    'processing': true,
                    'serverSide': true, //aktifkan server-side 
                    'ajax': {
                        'url': '/daftarhadir', // ambil data
                        'type': 'GET'
                    },
                    // parsing nama columns
                    'columns': columns
                });
                var oTable = $("#table-1")
                            .dataTable();
                        oTable.fnDraw(false);
            });

            $(document).on('click', '#btn-save', function() {
                // $('#signature').empty();
                // var img = $('<img>').attr('src', dataUrl);
                // $('#signature').append($('<p>').text("Here's your signature:"));
                // $('#signature').append(img);
                // console.log(sig.signature('toDataURL'));
                // var mycanvas = document.getElementById('canvas');
                var dataUrl = $('.js-signature').jqSignature('getDataURL');
                var img = dataUrl;
                // // console.log(img)
                anchor = $("#signature");
                anchor.val(img);
                $("#id-form").submit();
            });


            $(document).on('submit', '#id-form', function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "daftarhadir",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        $('.js-signature').jqSignature('clearCanvas');
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
                        $('#errnama').text('Mohon Mengisi Nama');
                        $('#errhp').text("nomor HP jangan kosong");
                        $('#errasal').text(
                            "asalnya belum diisi,Apakah Anda dari Asesor/Lembaga(Sekolah/Madrasah/Yayasan)/Dinas/Kemenag?"
                            );
                        $('#errkpr').text('Keperluannya apa dulu');
                        $('#errsign').text("jangan di kosongi tandatangannya");
                        $('#btn-save').html(
                            'Gagal Simpan, mohon diperbaiki lalu klik saya lagi'
                        );
                    }
                });
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        //   $(document).ready(() => {            
        // })    
    </script>

</body>

</html>
