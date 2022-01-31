<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Buku</h1>

<br>

<!-- DataTales Example -->
<div class="card shadow col-lg-12">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">
            Buku
        </a>
    </div>
    <div class=" card-body">
        <div class="table-responsive">
            <table class="table table-bordered" style="text-align: center;" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Harga Buku</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1;
                       foreach ($buku as $key) : ?>
                        <tr>
                            <td><?= $n++ ?></td>
                            <td><?= $key->Judul_buku ?></td>
                            <td><?= $key->Harga_buku ?></td>
                            <td>
                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $key->id_buku ?>">
                                    <span class="text">Pesan</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

