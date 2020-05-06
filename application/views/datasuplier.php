<div class="container-fluid">
    <div class="row mr-4">
        <div class="col-9 pt-5 pl-5">
            <h3>Data Suplier</h3>
        </div>
        <?= $this->session->flashdata('pesan');
        ?>
    </div>
    <div class="row">
        <div class="col-12 py-3 px-5">
            <?php if ($suplier) { ?>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Suplier</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($suplier as $row) { ?>
                            <tr>
                                <th><?= $i ?></th>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['kota'] ?></td>
                                <td><?= $row['nohp'] ?></td>
                                <td>.</td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            <?php } else {
                echo "<h4>Data suplier kosong</h4>";
            } ?>
        </div>
    </div>
</div>