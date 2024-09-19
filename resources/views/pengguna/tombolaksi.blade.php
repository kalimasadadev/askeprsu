<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <!-- <button type="button" class="btn btn-primary">1</button> -->
    <!-- <button type="button" class="btn btn-primary">2</button> -->
    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
            <a href="/admin/pengguna/lihat-pengguna/{{$model->id}}" type="button" class="dropdown-item"><i class="ri-computer-line"></i> Lihat</a>
            <form action="/admin/pengguna/hapus-pengguna/{{$model->id}}" method="POST">
            @csrf
            @method('DELETE')
                <button onclick="return confirm('lanjutkan untuk menghapus data?')" type="submit" class="dropdown-item"><i class="ri-drop-line"></i> Hapus</button>
            </form>
        </div>
    </div>
</div>