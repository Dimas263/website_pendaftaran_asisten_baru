<div class="container mt-5">
    <div class="card card-body border-info col-6 mx-auto">
        <form action="<?= base_url('Kontenweb/addData') ?>" method="post">
            <h4 class="text-center">Biodata Siswa</h4>
            <div class="form-group">

                <div class="row my-3">
                    <div class="col-md-3 my-auto">
                        Nama
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-3 my-auto">
                        Jenis Kelamin
                    </div>
                    <div class="col-md-9 my-auto">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="inlineRadio1" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jenis_kelamin" class="form-check-input" id="inlineRadio2" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-3 my-auto">
                        Tanggal Lahir
                    </div>
                    <div class="col-md-9">
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-3 my-auto">
                        Kota Lahir
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kota_lahir" class="form-control">
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-md-3 my-auto">
                        Alamat
                    </div>
                    <div class="col-md-9">
                        <textarea name="alamat" style="width:inherit;height:100px"></textarea>
                    </div>
                </div>
                <button class="btn btn-success float-right"> Simpan Data </button>
            </div>
        </form>
    </div>
</div>
