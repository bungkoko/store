<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar About
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul about</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $no=1;
                                    foreach($get_about->result() as $gt_about):?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $gt_about->about_title; ?></td>
                                            <td><?php echo word_limiter(strip_tags($gt_about->about_description), 20); ?> [....]</td>
                                            <td>
                                                 <a href="<?php echo site_url('about/update').'/'.$gt_about->about_id;?>" title="Update Data"> <i class="material-icons">update</i>
                                                </a>

                                            
                                                <a href="<?php echo site_url('about/delete').'/'.$gt_about->about_id;?>" title="Hapus Data"> <i class="material-icons">delete</i>
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