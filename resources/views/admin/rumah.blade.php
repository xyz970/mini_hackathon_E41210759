@extends('layouts.master')
@section('title', 'Data Rumah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span>Rumah </h4>
        <!-- Content -->
        <!-- Large Modal -->
        <div class="card">
            <h5 class="card-header">Data Rumah</h5>
            <div class="col-md-5" style="padding-left: 2rem; padding-bottom: 2rem">
            @if(Auth::user()->role == 'admin')
                <a href="{{ route('admin.rumah.tambah_data') }}" class="btn btn-primary">
                    Tambah Data
                </a>
             @endif
            </div>
            <div style="padding-left: 2rem; padding-right: 2rem; padding-bottom: 2rem">
                <div class="table-responsive text-nowrap">

                    <table class="table" id="tableMhs">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>id</th>
                                <th>Foto</th>
                                <th>Tipe</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <!--/ Card layout -->
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
            });
            loadTarif();
        })

        function loadTarif() {
            var url = "{{ route('admin.rumah.index') }}";
            $('#tableMhs').DataTable({
                searching: true,
                paging: true,
                destroy: true,
                "ordering": false,
                // serverSide: true,
                ajax: url,
                columnDefs: [{
                    target: 2,
                    visible: false,
                }],
                columns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'id',
                        name: 'id',
                        visible: false,
                    },
                    {
                        data: 'foto',
                        name: 'foto',
                    },
                    {
                        data: 'tipe',
                        name: 'tipe',
                    },
                    {
                        data: 'harga',
                        name: 'harga',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan',
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        visible: {{ Auth::user()->role == 'admin' ? 'true' : 'false' }},
                       // render: function(data, type, row) {
                         //   return '<button onclick="edit(' + row.id + ')" class="btn btn-icon me-2 btn-primary"><span class="tf-icons bx bx-pencil"></span></button>';
                        //}
                    }
                ],
            });
        }
    </script>
@endsection
