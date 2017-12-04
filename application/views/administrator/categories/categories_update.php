  <!-- Horizontal Layout -->

            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Kategori Produk
                            </h2>
                        </div>
                        <div class="body">
                            
                        <?php if($warning != ""): ?>
                            <div class="alert bg-red alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <p><?php echo $warning;?></p>
                            </div>
                        <?php endif; ?>
                    
                            <form class="form-horizontal" action="<?php echo current_url()?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" style="display: none">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="categories_title">Judul Kategori</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="categories_title" id="categories_title" class="form-control" placeholder="Masukkan Judul Kategori" value="<?php echo $read->categories_title; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="categories_abbrev">Kode Kategori</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="categories_abbrev" id="categories_abbrev" class="form-control" placeholder="Masukkan Kode Kategori (3 huruf)" value="<?php echo $read->categories_abbrev; ?>">
                                            </div>
                                        </div>
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