    <!-- Horizontal Layout -->

            <div class="row clearfix">

                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tentang
                            </h2>
                        </div>
                        <div class="body">

                        <?php if ($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning; ?></p>
                            </div>
                        <?php endif;?>

                            <form class="form-horizontal" action="<?php echo current_url() ?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">

                                <div class="row clearfix">
                                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label>Judul tentang</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="about_title" class="form-control" placeholder="Masukkan Judul tentang">
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="about_description">Deskripsi</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <textarea name="about_description" id="ckeditor">
                                        </textarea>
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