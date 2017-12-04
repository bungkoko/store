    <!-- Horizontal Layout -->

            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Akun User
                            </h2>
                        </div>
                        <div class="body">

                        <?php if ($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning; ?></p>
                            </div>
                        <?php endif;?>

                            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo current_url() ?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">

                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                        <label for="display_name">Username</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="user_name" id="display_name" class="form-control" placeholder="Masukkan Username Anda" value="<?php echo $read->user_username; ?>">
                                            </div>
                                            <small>*lewatkan jika username sudah sesuai</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                        <label for="display_name">Display Name</label>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="user_display_name" id="display_name" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $read->user_display_name; ?>">
                                            </div>
                                            <small>*lewatkan jika username sudah sesuai</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                        <label for="display_name">Email</label>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="user_mail" id="display_name" class="form-control" placeholder="Masukkan Email Anda" value="<?php echo $read->user_mail; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                        <label>Picture</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <a href="<?php echo site_url('user/avatar') ?>">
                                            <button type="button" class="btn bg-blue waves-effect">Ubah Picture</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <a href="<?php echo site_url('user/change_password') ?>">
                                            <button type="button" class="btn btn-primary waves-effect">Ganti Psssword</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                         <input type="reset" class="btn btn-primary m-t-15 waves-effect" value="Batal" name="reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->