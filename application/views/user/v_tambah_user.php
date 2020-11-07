<div class="panel panel-success">
    <div class="panel-heading">
        Tambah User
    </div>

    <div class="panel-body">

        <div class="alert alert-warning">
            <?php echo validation_errors(); ?>
        </div>

        <form action="<?php echo site_url('admin/user/proses_tambah'); ?>" method="post">

            <div class="form-group <?php echo (form_error('email')) ? 'has-error' : '' ?>">
                <label class="control-label">Email</label>
                <input type="text" id="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo set_value('password'); ?>" />
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="radio" name="status" placeholder="status" value="admin" />Admin
                <input type="radio" name="status" placeholder="status" value="staff" />Staff
            </div>
            <input type="submit" value="Simpan" class="btn btn-danger">
            <a href="<?php echo site_url('admin/user/datauser'); ?>" class="btn btn-default"> Kembali</a>

        </form>

    </div>

</div>