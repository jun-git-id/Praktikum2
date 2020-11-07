<!doctype html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col-md-4">

                <div class="panel panel-success">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        <?php if (validation_errors()) { ?>
                            <div class="alert alert-danger">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('pesan')) { ?>
                            <div class="alert alert-danger animated flash">
                                <?php echo $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php } ?>

                        <form action="<?php echo site_url('login/proses_login'); ?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email anda !">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password anda !">
                            </div>
                            <input type="submit" name="Login" value="Login" class="btn btn-primary">
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>