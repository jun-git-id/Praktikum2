<div class="panel panel-success">
    <div class="panel-heading">
        Edit Barang
    </div>

    <div class="panel-body">
        <form action="<?php echo site_url('admin/dashboard/proses_edit'); ?>" method="post">

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="hidden" name="id" value="<?php echo $barang->id; ?>" />
                <input type="text" class="form-control" name="nama" value="<?php echo $barang->nama_barang; ?>" />
            </div>
            <div class="form-group">
                <label>Dekstipri</label>
                <input type="text" class="form-control" name="deskripsi" value="<?php echo $barang->deskripsi; ?>" />
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $barang->kategori; ?>" />
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $barang->harga; ?>" />
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" class="form-control" name="foto" value="<?php echo $barang->foto; ?>" />
            </div>

            <input type="submit" value="Simpan" class="btn btn-success">
            <a href="<?php echo site_url('admin/dashboard/barang'); ?>" class="btn btn-default">Kembali</a>

        </form>
    </div>
</div>