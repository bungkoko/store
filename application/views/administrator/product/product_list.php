<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Product | <a href="<?php echo site_url('product/add')?>"><button type="button" class="btn btn-primary waves-effect">Tambah Produk</button> </a>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Produk</th>
                                            <th>Judul Produk</th>
                                            <th>Kategori Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Ketersediaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_product->result() as $gt_product):?>
                                        <tr>
                                            <th><?php echo $no++; ?></th>
                                            <th><?php echo $gt_product->product_id; ?></th>
                                            <th><?php echo $gt_product->product_title; ?></th>
                                            <th><?php echo $gt_product->categories_title; ?></th>
                                            <th>Rp. <?php echo number_format($gt_product->product_price,0,",",".");?></th>
                                            <th>
                                                <a href="<?php echo site_url('product/update_status/'.$gt_product->product_id.'/'.$gt_product->product_status.''); ?>">
                                                    <?php if($gt_product->product_status=='y'):?>
                                                        Tersedia
                                                    <?php elseif($gt_product->product_status=='n'):?>
                                                        Tidak tersedia
                                                    <?php else:?>
                                                        Maaf Status tidak ada;
                                                    <?php endif;?>                                                    
                                                </a>
                                            </th>
                                            <th>
                                                <div class="btn-group">
                                                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">update</i>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="<?php echo site_url('product/update').'/'.$gt_product->product_id;?>">Ubah Data</a></li>
                                                        <li><a href="<?php echo site_url('product/update_image').'/'.$gt_product->product_id;?>">Ubah Image</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">                                         
                                                    <a href="<?php echo site_url('product/delete').'/'.$gt_product->product_id;?>" title="Hapus Data">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                            </th>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>