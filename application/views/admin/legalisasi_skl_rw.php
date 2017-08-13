 <!--main content start-->
<html>
      <section id="main-content">
          <body>
          <section class="wrapper"> 
              <div id="page-inner">
                    <div class="col-md-12">
                        <div class="panel-body">
					<div class="table-responsive">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Surat Keterangan Lahir </h4>
                        <hr>        
      <table id="myTable" class="table table-striped table-advance table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Verif RT</th>
            <th>Tanggal Verif RW</th>
            <th>Tanggal Verif KEL</th>
            <th>Tanggal Verif KEC</th>
            <th>Lihat</th>
            <th>Verif RT</th>
            <th>Verif RW</th>
            <th>Verif KEL</th>
            <th>Verif KEC</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $no=1;
          foreach ($data_user as $row) { 
        $nik=$row['nik']; 
          $this->db->where('nik',$nik);
          $this->db->where('rw',$rw);
          $this->db->like('kelurahan',$kelurahan);
          $cek=$this->db->get('data_penduduk');
          foreach ($cek -> result() as $row1) 
          if(!empty($row1->nik)){
            ?>
          
          <tr>
          <td><?php echo $no ?> </td>
          <td><?php echo $row['nama'] ?> </td>
          <td><?php echo $row['tgl_daftar'] ?> </td>
          <td><?php echo $row['tgl_rt'] ?> </td>
          <td><?php echo $row['tgl_rw'] ?> </td>
          <td><?php echo $row['tgl_lurah'] ?> </td>
          <td><?php echo $row['tgl_camat'] ?> </td>
           <td ><a href="<?php echo base_url()."Admin/Admin_skl/Lihat";echo $row['id_skl'] ?>"> <i class="glyphicon glyphicon-eye-open"> </i> </a></td>
          
          <?php
          if($row['legalisasi_rt'] == "Y"){
            ?>
            <td > 
            <i class="glyphicon glyphicon-ok"> </i> 
            </td>
        
            <?php
          }
          else{
          ?>
            <td >
            <i class="glyphicon glyphicon-remove"> </i> 
            </td>
            <?php
          }
          ?>

          <?php
          if($row['legalisasi_rt'] == "Y" && $row['legalisasi_rw'] == "Y"){
            ?>
            <td ><a href="<?php echo base_url()."Admin/Admin_skl/legalisasirw/";echo $row['id_skl'] ?>"> 
            <i class="glyphicon glyphicon-ok"> </i> </a>
            </td>
            <?php
          }
          else{
          ?>
            <td ><a href="<?php echo base_url()."Admin/Admin_skl/legalisasirw/";echo $row['id_skl'] ?>"> 
            <i class="glyphicon glyphicon-remove"> </i> </a>
            </td>
            <?php
          }
          ?>

          <?php
          if($row['legalisasi_camat'] == "Y"){
            ?>
            <td >
            <i class="glyphicon glyphicon-ok"> </i> 
            </td>
            <?php
          }
          else{
          ?>
            <td >
            <i class="glyphicon glyphicon-remove"> </i> 
            </td>
            <?php
          }
          ?>

          <?php
          if($row['legalisasi_lurah'] == "Y"){
            ?>
            <td >
            <i class="glyphicon glyphicon-ok"> </i> 
            </td>
            <?php
          }
          else{
          ?>
            <td >
            <i class="glyphicon glyphicon-remove"> </i>
            </td>
            <?php
          }
          ?>


          </tr>
          <?php 
          $no++;
          }}
          ?>
          

        </tbody>
                            </table>
<!--                            </form>-->
                        </div><! --/content-panel -->
                    </div><!-- /col-md-12 -->
                        </div>
              </div>
              </div>
          </section>
              </body>
      </section>
</html>