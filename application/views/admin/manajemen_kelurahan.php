 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Managemen kelurahan</h4>
                            <hr>
                            <a href="<?php echo base_url ('admin/tambah_kelurahan')?>" class="btn btn-info" role="button">Tambah Kelurahan</a>
                                <thead>
                                
        </br>
      </br>
                                <form method=POST action='' target=_blank>
      
      <table class="table">
        <tr>
          <th>No</th>
          <th width="250px">Nama Kelurahan</th>
          <th >Kode Kelurahan</th>
          <th width="200px">Alamat</th>
          <th >Kode Pos</th>
          <th >Telepon</th>
          
        </tr>
        <?php $i=1;
        foreach ($Manajemen_kelurahan as $row):?>
        <tr><td> <?php echo $i ;?></td>
          <td> <?php echo $row['nama_instansi'];?> </td>
          <td> <?php echo $row['kode_instansi'];?></td>
          <td> <?php echo $row['alamat_instansi'] ;?> </td>
          <td> <?php echo $row['kode_pos'];?> </td>
          <td> <?php echo $row['telepon'];?></td>
          <td ><a href="<?php echo base_url()."Admin/Edit_kelurahan/index/";echo $row['id_instansi'] ?>"> <i class="glyphicon glyphicon-pencil"> </i> </a></td>
          <td ><a href="<?php echo base_url()."Admin/Manajemen_kelurahan/delete/";echo $row['id_instansi']?>"><i type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');" class="glyphicon glyphicon-trash"> </i> </a></td>
        </tr>  
        <?php $i++;?>
      <?php endforeach;?>  

        </table>
        </form>


                        </div><! --/content-panel -->
                    </div><!-- /col-md-12 -->
        

          </section>
      </section>

      