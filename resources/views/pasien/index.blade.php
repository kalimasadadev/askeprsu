@extends("web.dasbor")

@section('content')
<form action="javascript:void(0)" id="cariDataFilter" enctype="multipart/form-data" class="mb-3">
    <div class="row mb-2">
        <div class="col-sm-8">
            <label for="">Cari Nama</label>
            <input type="text" class="form-control" name="fnama">
        </div>

        <div class="col-sm-2">
            <label for="">Profesi</label>
            <select name="fprofesi" id="fprofesi" class="form-control">
                <option value="">--Semua--</option>
                <!-- <option value="0">Admin</option>
                <option value="1">Perawat</option> -->
                @foreach (\App\Helpers\Constants::TIPE_PROFESI as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-2">
            <label for="">Aktif</label>
            <select name="faktif" id="faktif" class="form-control">
                <option value="">--Semua--</option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-info">Cari</button>
    <button type="reset" id="resetFilter" class="btn btn-danger">Reset</button>
</form>

<div class="iq-card">
    <div class="iq-card-body">

        <table class="table" id="tabelPasien">
            <thead>
                <tr>
                    <th scope="col" width="1">NORM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TEMPAT LAHIR</th>
                    <th scope="col">TANGGAL LAHIR</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">STATUS</th>
                    <!-- <th scope="col" width="1">AKSI</th> -->
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap4.min.css">
@endpush

@push('script')
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {
        var tabel = $('#tabelPasien').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/pasien',
                data: function (d) {
                    d.fnama = $('input[name=fnama]').val()
                    d.faktif = $('#faktif').val()
                }
            }, // memanggil route yang menampilkan data json
            searching: false,
            ordering: false,
            lengthChange: false,
            pageLength: 15,
            lengthMenu: [5, 10, { label: 'Semua', value: -1 }],
            pagingType: "full",
            layout: {
                // topEnd: {
                //     search: {
                //         menu: [5, 10, 15, 20]
                //     }
                // },
                // bottomEnd: {
                //     paging: {
                //         firstLast: true
                //     }
                // }
            },
            // orders: [[1, 'desc']],
            // stateSave: true,
            // displayStart: 5,
            language: {
                entries: {
                    _: 'perawat',
                    1: 'person'
                },
                info: 'halaman _PAGE_ dari _PAGES_',
                lengthMenu: 'tampil _MENU_ data'
            },
            columns: [
                {
                    data: 'NORM',
                    name: 'NORM'
                },
                {
                    data: 'NAMA',
                    name: 'NAMA'
                },
                {
                    data: 'TEMPAT_LAHIR',
                    name: 'TEMPAT_LAHIR'
                },
                {
                    data: 'TANGGAL_LAHIR',
                    name: 'TANGGAL_LAHIR'
                },
                {
                    data: 'ALAMAT',
                    name: 'ALAMAT'
                },
                {
                    data: 'STATUS',
                    name: 'STATUS'
                },
                // {
                //     data: 'aksi',
                //     name: 'aksi'
                // },
            ]
        });

        $('#cariDataFilter').on('submit', function (e) {
            tabel.draw();
        });

        $('#resetFilter').on('click', function (e) {
            document.getElementById('cariDataFilter').reset();
            tabel.draw();
        })
    });
</script>
@endpush