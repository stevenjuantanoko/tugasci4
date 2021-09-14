<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Barang</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                </hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('items/update/' . $items->id_barang) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                        value="<?= $items->nama_barang; ?>">
                </div>

                <div class="form-group">
                    <label for="jumlah_barang">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang"
                        value="<?= $items->jumlah_barang; ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>