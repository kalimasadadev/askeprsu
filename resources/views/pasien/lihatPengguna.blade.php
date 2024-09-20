@extends("web.dasbor")

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="iq-card">
            {{-- <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Basic Form</h4>
                </div>
            </div> --}}
            <div class="iq-card-body">
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis
                    mollis, diam nibh finibus leo</p> --}}
                <form id="formSubmit" action="{{ url()->current() }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" name="nama" value="{{ old('nama',$model->nama) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input id="nip" name="nip" value="{{ old('nip',$model->nip) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input id="username" name="username" value="{{ old('username',$model->username) }}"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="profesi">Profesi</label>
                        {{-- <input value="{{ old('profesi',$model->profesi) }}" class="form-control" id="profesi"> --}}
                        <select id="profesi" name="profesi" class="form-control">
                            @foreach(\App\Helpers\Constants::TIPE_PROFESI as $key => $value)
                            <option value="{{$key}}" {{$key==$model->profesi ? 'selected' : ''}}>{{$value}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div> --}}
                    {{-- <div class="checkbox mb-3">
                        <label><input type="checkbox"> Remember me</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ URL::previous() }}" class="btn iq-bg-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')

@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $('#formSubmit').validate({
        // rules: {
        //     nama: 'required',
        //     nip: 'required',
        //     username: 'required',
        //     password: 'required',
        //     profesi: 'required'
        // },
        submitHandler: function (f) {

            var form = document.getElementById('formSubmit');
            var formData = new FormData(form);

            $.ajax({
                type: "PATCH",
                url: $('#formSubmit').attr("action"),
                // data: formData,
                data: $('#formSubmit').serialize(),
                success: function (s) {
                    if (s.error) {
                        $.each(s.message, function (index, value) {
                            toastr["warning"](value)
                        })
                    } else {
                        Swal.fire({
                            backdrop: true,
                            title: "PESAN!",
                            text: s.message,
                            icon: "success",
                            allowOutsideClick: false,
                            allowEscapeKey: false
                        });
                    }
                },
                error: function (e) {

                }
            })
        }
    });
</script>
@endpush