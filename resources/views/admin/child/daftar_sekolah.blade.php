@extends('admin.layout.wrapper')
@section('admin-container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $tittle }}</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-striped table"
                        id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No.
                                </th>                                
                                <th class="text-center">NPSN</th>
                                <th class="text-center">Nama Lembaga</th>
                                <th class="text-center">Jenjang</th>
                                <th class="text-center">Kab./Kota</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Status</th>                                
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection