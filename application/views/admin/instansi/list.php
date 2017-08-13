<section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Managemen pengguna</h4>
                            <hr>
                            <p> <a href="<?php echo base_url('admin/instansi/tambah')?>;" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></p>

                            <?php
                            //cetak notofikasi
                            if($this->session->flashdata('sukses')){
                            	echo '<div class="alert alert-succes">';
                            	echo $this->session->flashdata('sukses');
                            	echo </div>;
                            }?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                <thead>
                                	<tr>
                                		<th>#</th>
                                		<th>Username</th>
                                		<th>Nama Lengkap</th>
                                		<th> Instansi</th>
                                	</tr>
                                </thead>
                                <tbody>
                                	<?php $i=1; foreach ($instansi as $row) {?>
                                	<tr class="odd gradeX">
                                	<td> <?php echo $i ?></td>
                                	<td><?php echo $row->Username ?></td>
                                	<td><? php echo $row->nama_lengkap ?></td>
                                	<td><?php echo $row->id_instansi ?></td>
                                	<td ><a href="<?php echo base_url('admin/instansi/edit'.$instansi->id_instansi)?>" class="btn btn-primary btn-sm" title="Edit Pengguna"> <i class=" fa fa-edit"> </i> </a></td>
          							<?php
          							//delete
          							include('delete.php');
          							?>
          							</tr>
          							<?php $i++} ?>
               
                                	}
                                <?php endforeach;?>
                                </tbody>
                                	
                                </table>
                                </div>
                                </div>
                                </section>
                                </section>