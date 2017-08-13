<section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $instansi->id_instansi ?>" title="Delete Pengguna"> <i class="fa fa-trash-o"></i></button>
                            <div class="modal fade" id="myModal <?php echo $instansi->id_instansi?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            	<h4 class="modal-title" id="myModalLabel">Hapus data pengguna?</h4>
                            </div>
                            	<div class="modal-body">
                            		Yakin ingin hapus data pengguna?
                            	</div>
                            	<div class="modal-footer">
                            		<button type="button" class="btn btn-default " data-dismiss="modal"> Close</button>
                            		<a href="<?php echo base_url('admin/instansi/delete'.$instansi->id_instansi)?>" class="btn btn-primary"><i class="fa fa-trash-o"> Ya, Hapus pengguna ini.</a>
                            	</div>
                            </div>
                            	
                            </div>

                            </div>
                            </div>
                            </div>
                            </section>
                            </section>