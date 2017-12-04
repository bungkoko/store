    <!-- Horizontal Layout -->

            <div class="row clearfix">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Produk
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
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="product_title">Judul Produk</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Masukkan Judul Produk" value="<?php echo $read->product_title; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="product_title">Kategori Produk</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <select class="form-control show-tick" name="categories">
                                            <option value="">-- Please select --</option>
                                            <?php foreach ($get_categories->result() as $gtCat): ?>
                                            <option value="<?php echo $gtCat->categories_id?>"><?php echo $gtCat->categories_title;?></option>
                                            <?php endforeach;?>
                                         </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="product_price">Harga Produk</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp.</span>
                                                <div class="form-line">
                                                    <input type="text" name="product_price" class="form-control" value="<?php echo $read->product_price; ?>">
                                                </div>
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="product_description">Deskripsi</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <textarea name="product_description" id="ckeditor"><?php echo $read->product_description;?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Simpan" name="submit">
                                          <a href="<?php echo site_url('product')?>"><button type="button" class="btn btn-primary m-t-15 waves-effect">Batal</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->