<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Buku</h1>

<br>

<!-- DataTales Example -->
<div class="card shadow col-lg-12">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
            Tambah Data
        </a>
    </div>
    <div class=" card-body">
        <div class="table-responsive">
            <table class="table table-bordered" style="text-align: center;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Judul Buku</th>
                        <th>Harga Buku</th>
                        <th>Jumlah</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $n = 1;
                       foreach ($buku as $key) : ?>
                        <tr>
                            <td><?= $n++ ?></td>
                            <td><?= $key->Judul_buku ?></td>
                            <td><?= $key->Harga_buku ?></td>
                            <td><?= $key->Jumlah_beli ?></td>
                            <td><?= $key->tanggal ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php foreach ($buku as $key) : ?>
<div class="modal fade" id="editModal<?= $key->id_buku ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('Controller_buku/edit_buku'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_buku" value="<?= $key->id_buku ?>">
                    <div class="card-header">
                        <h4>Form Edit Merk</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="Judul_buku" placeholder="Judul Buku" value="<?= $key->Judul_buku ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="Harga_buku" placeholder="Harga" value="<?= $key->Harga_buku ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" name="Stok_buku" placeholder="Stok" value="<?= $key->Stok_buku ?>">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>

<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?= site_url('Controller_buku/tambah_buku'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <h4>Form Buku</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Buku</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="Judul_buku" placeholder="Judul">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Harga Buku</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="Harga_buku" placeholder="Harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Stok</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="Stok_buku" placeholder="Stok">
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>