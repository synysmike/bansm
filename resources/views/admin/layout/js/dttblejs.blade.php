

<script src="admin_theme/library/datatables/media/js/jquery.dataTables.min.js"></script>   
    
<script src="admin_theme/library/jquery-ui-dist/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
{{-- <script src="admin_theme/js/page/modules-datatables.js"></script> --}}
<script>
    $(document).ready(function() {
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
        });
</script>