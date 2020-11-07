<div class="panel panel-danger">
    <div class="panel-heading">
        Edit User
    </div>
    <div class="panel-body">
        <form action="<?php echo site_url('admin/user/proses_edit'); ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="hidden" name="id" value="<?php echo $user->id; ?>" />
                <input type="text" class="form-control" name="email" value="<?php echo $user->email; ?>" />
            </div>
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $user->name; ?>" />
            </div>
            <div class="form-group">
                <label>password</label>
                <input readonly type="text" class="form-control" name="password" value="<?php echo $user->password; ?>" />
            </div>
            <div class="form-group">
                <label>status</label> <br>
                <input type="radio" name="status" value="admin" <?php if ($user->status == 'admin') {
                                                                    echo 'checked';
                                                                } ?> /> Admin
                <input type="radio" name="status" value="staff" <?php echo ($user->status == 'staff') ? 'checked' : ''; ?> /> Staff
            </div>
            <input type="submit" value="Simpan" class="btn btn-danger">
            <a href="<?php echo site_url('admin/user'); ?>" class="btn btn-default"> Kembali</a>

        </form>

    </div>

</div>