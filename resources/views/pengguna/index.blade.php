@extends("web.dasbor")

@section('content')
<form action="javascript:void(0)" id="cariPenggunaFilter" enctype="multipart/form-data" class="mb-3">
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

        <table class="table" id="tabelPengguna">
            <thead>
                <tr>
                    <th scope="col" width="1">#</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col" width="1">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PROFESI</th>
                    <th scope="col">AKTIF</th>
                    <th scope="col" width="1">AKSI</th>
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
        var tabel = $('#tabelPengguna').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '/admin/pengguna',
                data: function (d) {
                    d.fnama = $('input[name=fnama]').val()
                    d.fprofesi = $('#fprofesi').val()
                    d.faktif = $('#faktif').val()
                }
            }, // memanggil route yang menampilkan data json
            searching: false,
            ordering: false,
            lengthChange: false,
            pageLength: 5,
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
                { // mengambil & menampilkan kolom sesuai tabel database
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'nip',
                    name: 'nip'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'profesi',
                    name: 'profesi'
                },
                {
                    data: 'aktif',
                    name: 'aktif'
                },
                {
                    data: 'aksi',
                    name: 'aksi'
                },
            ]
        });

        $('#cariPenggunaFilter').on('submit', function (e) {
            tabel.draw();
        });

        $('#resetFilter').on('click', function (e) {
            // $('#cariPenggunaFilter')[0].reset();
            // $('input[name=fnama]').val(null)
            // $('#fprofesi').val(null)
            // $('#faktif').val(null)
            document.getElementById('cariPenggunaFilter').reset();
            tabel.draw();
        })
    });
</script>
@endpush