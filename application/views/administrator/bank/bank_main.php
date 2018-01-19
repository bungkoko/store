    <!-- Horizontal Layout -->
            <div class="row clearfix">

                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
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
                    
                            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo current_url()?>" method="post">
                                 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" style="display: none">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Bank</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="bank_title" id="bank_title" class="form-control" placeholder="Masukkan Nama Bank">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nomor Rekening</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="bank_rekening" id="bank_rekening" class="form-control" placeholder="Masukkan Nomor Rekening">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Atas Nama</label>
                                    </div>
                                    <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="bank_atas_nama" id="bank_atas_nama" class="form-control" placeholder="Masukkan Atas Nama Rekening">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-5 form-control-label">
                                        <label for="product_description">Upload Logo</label>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-7">
                                        <div id="kv-avatar-errors-2"></div>
                                        <div class="kv-avatar" style="width:200px;text-align:center">
                                            <input id="upload_image" name="bank_logo" type="file" class="file-loading">
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
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Bank
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bank</th>
                                            <th>Rekening</th>
                                            <th>Atas Nama</th>
                                            <th>Logo</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_list->result() as $gt_list):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $gt_list->bank_title; ?></td>
                                            <td><?php echo $gt_list->bank_rekening; ?></td>
                                            <td><?php echo $gt_list->bank_atas_nama; ?></td>
                                            <td>
                                                 <a href="<?php echo site_url('bank/update_logo').'/'.$gt_list->bank_id;?>" title="Update Data">
                                                    <img src="<?php echo base_url().$gt_list->bank_logo;?>" width="50%" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo site_url('bank/update').'/'.$gt_list->bank_id;?>" title="Update Data"><i class="material-icons">update</i>
                                                </a>
                                                <a href="<?php echo site_url('bank/delete').'/'.$gt_list->bank_id;?>" title="Hapus Data"> <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Horizontal Layout -->