<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" name="nama" value="<?= set_value('nama'); ?>"
                                                    class="form-control form-control-user" id="nama"
                                                    placeholder="Nama Lengkap">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" value="<?= set_value('email'); ?>"
                                                    class="form-control form-control-user" id="email"
                                                    placeholder="Email Address">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" value="<?= set_value('password'); ?>"
                                                    class="form-control form-control-user" id="password"
                                                    placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="password1" class="form-control"
                                                        id="password1" type="password"
                                                        placeholder="Confirm password" />
                                                    <label for="password1">Confirm Password</label>
                                                </div>
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Create
                                        Account</button>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <a class="small" href="<?= base_url('Auth'); ?>" ></a>Have an account? Go to login
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>