<div class="panel panel-primary">
    <div class="panel-heading">Data User</div>
    <div class="panel-body">

        <a href="<?php echo site_url('admin/user/tambah'); ?>" class="btn btn-default"> Tambah Data User</a>
        <hr>
        <?php if ($this->session->flashdata('pesan')) { ?>
            <div class="alert alert-info animated flash">
                <?php echo $this->session->flashdata('pesan'); ?>
            </div>
        <?php } ?>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Status</th>

                    <th>Aksi
                        </td>
                </tr>
            </thead>
            <tbody>


                <?php
                $no = 1;
                foreach ($isi_user as $value) {
                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->password; ?></td>
                        <td><?php echo $value->status; ?></td>

                        <td>

                            <a href="<?php echo site_url('admin/user/delete/' . $value->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                            <a href="<?php echo site_url('admin/user/edit/' . $value->id) ?>" class="btn btn-info btn-xs"> Edit</a>

                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>
</div>