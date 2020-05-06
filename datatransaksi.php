<div class="container-fluid">
    <div class="row mr-4">
        <div class="col-9 pt-5 pl-5">
            <h3>Data Transaksi</h3>
        </div>
        <?= $this->session->flashdata('pesan');
        ?>
    </div>
    <div class="row">
        <div class="col-12 py-3 px-5">
            <?php if ($transaksi) { ?>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Pembeli</th>
                            <th>Obat yang terjual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($transaksi as $row) { ?>
                            <tr>
                                <th><?= $i ?></th>
                                <td><?= $row['Tanggal Transaksi'] ?></td>
                                <td><?= $row['Nama pembeli'] ?></td>
                                <td><?= $row['obat yang terjual'] ?></td>
                            </tr>
                        <?php $i++;
                    } ?>

                    </tbody>
                </table>
            <?php } else {
                echo "<h4>Data Transaksi kosong</h4>";
            } ?>
        </div>
    </div>
</div>