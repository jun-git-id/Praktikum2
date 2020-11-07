<div class="panel panel-success">
    <div class="panel-heading">
        Tambah Barang
    </div>

    <div class="panel-body">

        <form action="<?php echo site_url('admin/dashboard/proses_tambah'); ?>" method="post">

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama" />
            </div>
            <div class="form-group">
                <label>Dekstipri</label>
                <input type="text" class="form-control" name="deskripsi" />
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" />
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" />
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" class="form-control" name="foto" />
            </div>

            <input type="submit" value="Simapan" class="btn btn-success">
            <a href="<?php echo site_url('admin/dashboard/barang'); ?>" class="btn btn-default">Kembali</a>

        </form>
    </div>
</div>