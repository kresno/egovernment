 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Managemen pengguna</h4>
                            <hr>
                                <thead>
                                <form method=post id="tabel">
      
      <table class="table">
        <tr>
          <th>No</th>
          <th width="250px">Username</th>
          <th >Nama Lengkap</th>
          <th width="200px">Instansi</th>
          <th width="200px">Aksi</th>
         
          
        </tr>
        <?php $i=1;
        foreach ($Manajemen_pengguna as $row):?>
        <tr><td> <?php echo $i ;?></td>
          <td> <?php echo $row['username'];?> </td>
          <td> <?php echo $row['nama_lengkap'];?></td>
          <td> <?php echo $row['id_instansi'] ;?> </td>
          <td ><a href="<?php echo base_url()."Admin/Edit_rt/index/";echo $row['user_id'] ?>"> <i class="glyphicon glyphicon-pencil"> </i> </a></td>
      
        </tr>  
        <?php $i++;?>
      <?php endforeach;?> 
           

        </table>
                        </div><! --/content-panel -->
                    </div><!-- /col-md-12 -->
        

          </section>
      </section>

      