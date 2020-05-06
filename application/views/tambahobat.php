<div class='container'>
    <div class="row">
        <div class="col-12 py-5">
            <form>
                <div class="form-group">
                    <label for="suplier">Suplier</label>
                    <select class="form-control" id="suplier1" name="suplier" required>
                        <option>Pilih</option>
                        <?php foreach ($suplier as $row) { ?>
                            <option value="<?= $row['id_suplier'] ?>"><?= $row['nama'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">nama obat</label>
                    <input type="text" class="form-control" id="nama1" name="nama_obat" value="<?= set_value('nama_obat'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="produsen">produsen</label>
                    <input type="text" class="form-control" id="produsen1" name='produsen' value="<?= set_value('produsen'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="text" class="form-control" id="harga1" name="harga" value="<?= set_value('harga'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="jumlahstok">jumlah stok</label>
                    <input type="text" class="form-control" id="jumlahstok1" name="qty" value="<?= set_value('qty'); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>