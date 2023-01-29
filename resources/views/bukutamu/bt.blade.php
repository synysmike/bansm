@extends('auth.wrapper')
@push('tittle')
<title>Bukutamu &mdash; BAN-S/M JATIM</title>
<meta property="og:title" content="Bukutamu" />
{{-- <meta property="og:type" content="video.movie" /> --}}
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:image" content="/ban.png" />
<link rel="icon" type="image/x-icon" href="/ban.png">
@endpush
@push('cssform-custom')
    <link rel="stylesheet" href="{{ asset('admin_theme/modules/prism/prism.css') }}">
    <style>
        #canvasDiv {
            position: relative;
            border: 2px dashed grey;
        }
    </style>
@endpush
@section('form')
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-show">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">

                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table-striped table" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center"> No. </th>
                                    <th class="text-center"> Nama </th>
                                    <th class="text-center"> HP </th>
                                    <th class="text-center"> Asal </th>
                                    <th class="text-center"> Keperluan </th>
                                    <th class="text-center"> TTD </th>
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
        <div class="d-flex align-items-stretch flex-wrap">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="m-3 p-4">
                    <img src="{{ asset('/ban.png') }}" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Selamat Datang Di <span class="font-weight-bold">BAN-S/M
                            Provinsi
                            Jawa Timur</span>
                    </h4>
                    <p class="text-muted"></p>
                    <button class="btn btn-primary trigger--fire-modal-2" id="modal-2">lihat pengunjung</button>
                    <form id="id-form" class="needs-validation" novalidate="" enctype="multipart/form-data">
                        {{-- @csrf --}}
                        <div class="form-group">
                            <label for="username">Nama</label>
                            <div class="invalid-feedback">
                                Mohon Mengisi Nama
                            </div>
                            <input id="nama" type="text" class="form-control" name="nama" tabindex="1"
                                value="" required autofocus>
                        </div>
                        <div id="errnama" class="alert-danger"></div>
                        
                        <div class="form-group">
                            <label for="username">Nomer HP</label>
                            <div class="invalid-feedback">
                                Mohon Mengisi No HP
                            </div>
                            <input minlength="9" required
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                maxlength="13" type="number" name="hp" class="form-control pl-1">
                        </div>
                        <div id="errhp" class="alert-danger"></div>
                        <div class="form-group">
                            <label for="username">Asal</label>
                            <div class="invalid-feedback">
                                Mohon Mengisi Asal
                            </div>
                            <input id="asal" type="text" class="form-control" name="asal" tabindex="1"
                                value="" required
                                placeholder="Masukan Asal ( Contoh : Asesor/Nama Sekolah/Dinas/Kemenag)">
                        </div>
                        <div class="form-group">
                            <label for="username">Alamat</label>
                            <div class="invalid-feedback">
                                Mohon Mengisi Asal
                            </div>
                            <input id="alamat" type="text" class="form-control" name="alamat" tabindex="1"
                                value="" required
                                >
                        </div>
                        <div id="errasal" class="alert-danger"></div>
                        <div class="form-group">
                            <label for="username">Keperluan</label>

                            <input id="kpr" type="text" class="form-control" name="kpr" tabindex="1"
                                value="" required>
                        </div>
                        <div class="alert-danger"></div>

                        <div class="form-group">
                            <input required type="hidden" id="signature" name="signature">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="signaturesubmit" value="1">
                        </div>
                    </form>
                    <div class="invalid-feedback">
                        Mohon Mengisi tandatangan
                    </div>
                    <div>
                        <p> Tandatangan :</p>
                    </div>
                    <div id="canvasDiv"></div>
                    <div id="errsign" class="alert-danger" id=""></div>
                    <button type="button" class="btn btn-danger" id="reset-btn">Ulangi</button>
                    <button type="button" class="btn btn-primary btn-icon icon-right" id="btn-save">Klik2x</button>

                    {{-- <img class="img-fluid" src="{{ asset('storage/ttdbukutamu/'.$data->ttd) }}" alt="{{ $data->ttd }}"> --}}
                </div>
            </div>

            @include('auth.bg')
        </div>
    </section>
@endsection


@push('jsform-custom')
    <script src="{{ asset('admin_theme/library/sweetalert/dist/sweetalert.min.js') }}"></script>
    
    <script src="{{ asset('admin_theme/library/datatables/media/js/jquery.dataTables.min.js') }}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script> --}}
    {{-- <script src="admin_theme/modules/prism/prism.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
        integrity="sha512-0QDLUJ0ILnknsQdYYjG7v2j8wERkKufvjBNmng/EdR/s/SE7X8cQ9y0+wMzuQT0lfXQ/NhG+zhmHNOWTUS3kMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.js"></script>



    <script>
        // for limit number char on phone number
        



        $('number#title').attr('maxLength', '8').keypress(limitMe);

        function limitMe(e) {
            if (e.keyCode == 8) {
                return true;
            }
            return this.value.length < $(this).attr("maxLength");
        }
        


        $('#modal-2').click(function() {
            $("#modal-show").modal('show');
            var table = $('#table-1').DataTable({
                processing: true,
                serverSide: true, //aktifkan server-side 
                ajax: {
                    url: "/bukutamu", // ambil data
                    type: 'GET'
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'nohp',
                        name: 'nohp'
                    },
                    {
                        data: 'asal',
                        name: 'asal'
                    },
                    {
                        data: 'keperluan',
                        name: 'keperluan'
                    },
                    {
                        data: 'ttd',
                        name: 'ttd'
                    }

                ],
            });
        });


        $(document).on('click', '#btn-save', function(e) {
            e.preventDefault();
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            // console.log(img)
            anchor = $("#signature");
            anchor.val(img);
            $("#id-form").submit();
            return false;
        });


        $(document).on('submit', '#id-form', function(e) {
            e.preventDefault()
            if ($("#id-form").length > 0) {
                // console.log('berhasil submit');

                $('#id-form').validate({
                    submitHandler: function(form) {
                        var actionType = $('#form_submit').val();
                        var formData = new FormData(form);
                        $.ajax({
                            type: "POST",
                            url: "{{ route('bukutamu.store') }}",
                            data: formData,
                            dataType: 'json',
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                context.clearRect(0, 0, window.innerWidth, window
                                    .innerWidth);
                                clickX = [];
                                clickY = [];
                                clickDrag = [];
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
                                $('#errnama').text(data.responseJSON.errors.nama);
                                $('#errhp').text(data.responseJSON.errors.hpks);
                                $('#errasal').text(data.responseJSON.errors.asal);
                                $('#errkpr').text(data.responseJSON.errors.hp);
                                $('#errsign').text(data.responseJSON.errors.signature);
                                $('#btn-save').html(
                                    'Gagal Simpan, mohon diperbaiki lalu klik saya lagi'
                                );
                            }
                        });
                    }
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            return false;

        });


        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }

        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });
        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                // console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });
        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });
        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }
        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;
        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);
        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);
        canvas.addEventListener("touchmove", function(e) {
            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);
        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }
        var elem = document.getElementById("canvas");
        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);

        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }


        //   $(document).ready(() => {            
        // })    
    </script>
@endpush
