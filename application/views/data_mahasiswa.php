<div class="container">
<br>
<br>
	<a href="<?= base_url() ?>" class="btn btn-primary mt-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/add--v1.png"/> Tambah Data</a>
    <div class="card card-body mt-3">
        <h4>Data Mahasiswa</h4>

        <table class="table" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <thead class="thead-dark" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Kota Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <th scope="row" style="background-color:#fdc921;"><?= $i++ ?></th>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['jenis_kelamin'] ?></td>
                        <td><?= $mhs['tanggal_lahir'] ?></td>
                        <td><?= $mhs['kota_lahir'] ?></td>
                        <td><?= $mhs['alamat'] ?></td>
                        <td>
                            <a href="<?= base_url('Kontenweb/deleteData') ?>?id=<?= $mhs['id_mahasiswa'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><img src="https://img.icons8.com/material-rounded/24/ffffff/trash.png"/> Hapus</a>
                            <button type="button" href="<?= base_url('Kontenweb/editData'); ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editDataModal<?= $mhs['id_mahasiswa'] ?>" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"><img src="https://img.icons8.com/material-outlined/24/ffffff/pencil--v2.png"/> Ubah</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php foreach ($mahasiswa as $edit) : ?>
    <div class="modal fade" id="editDataModal<?= $edit['id_mahasiswa'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Kontenweb/editData') ?>" method="post">


                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="hidden" name="id_mahasiswa" class="form-control" value="<?= $edit['id_mahasiswa'] ?>">
                            <input type="text" name="nama" class="form-control" value="<?= $edit["nama"] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="<?=
                                                                                            $edit['tanggal_lahir'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Kota Lahir</label>
                            <input type="text" name="kota_lahir" class="form-control" value="<?=
                                                                                                $edit["kota_lahir"] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $edit["alamat"] ?>">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
