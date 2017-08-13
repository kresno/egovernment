 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Managemen pengguna</h4>
                            <hr>
                            <a href="<?php echo base_url ('admin/tambah_pengguna')?>" class="btn btn-info" role="button">Tambah Pengguna</a>
                                <thead>
                                    
      <form method=post id="tabel">
      
      <table class="table">
        <tr>
          <th>No</th>
          <th width="250px">Username</th>
          <th >Nama Lengkap</th>
          <th width="200px">Password</th>
          <th width="200px">Level</th>
         
          
        </tr>
        <?php $i=1;
        foreach ($Manajemen_pengguna as $row):?>
        <tr><td> <?php echo $i ;?></td>
          <td> <?php echo $row['username'];?> </td>
          <td> <?php echo $row['nama_lengkap'];?></td>
          <td> <?php echo $row['password'];?> </td>
          <td> <?php echo $row['level'];?> </td>
          <td ><a href="<?php echo base_url()."Admin/Edit_pengguna/index/";echo $row['username'] ?>"> <i class="glyphicon glyphicon-pencil"> </i> </a></td>
          <td ><a href="<?php echo base_url()."Admin/Manajemen_pengguna/delete/";echo $row['username']?>"><i type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');" class="glyphicon glyphicon-trash"> </i> </a></td>
        </tr>  
        <?php $i++;?>
      <?php endforeach;?> 
           

        </table>
        </form>
                          </thead>
                        </div><! --/content-panel -->
              </div>
          </section>
</section>
      