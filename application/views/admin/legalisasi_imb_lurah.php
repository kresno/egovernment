 <!--main content start-->
<html>
      <section id="main-content">
           <body>
          <section class="wrapper">  
              <div id="page-inner">
                    <div class="col-md-12 mt">
                    <div class="panel-body">
					<div class="table-responsive">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Izin Mendirikan Bangunan</h4>
                            <hr>
      <table id="myTable" class="table table-striped table-advance table-hover">
         <thead> 
             <tr>
           <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Verif KEL</th>
            <th>Tanggal Verif KEC</th>
            <th>Lihat</th>
            <th>Verif KEL</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $no=1;
          foreach ($data_user as $row) { 
        $nik=$row['nik']; 
          $this->db->where('nik',$nik);
          $this->db->like('kelurahan',$kelurahan);
          $cek=$this->db->get('data_penduduk');
          foreach ($cek -> result() as $row1) 
          if(!empty($row1->nik)){
            ?>
          
          <tr>
          <td><?php echo $no ?> </td>
          <td><?php echo $row['nama_perusahaan'] ?> </td>
          <td><?php $originalDate = $row['tgl_daftar']; $newDate = date("d-m-Y", strtotime($originalDate)); echo $newDate; ?> </td>
          <td><?php $originalDate = $row['tgl_lurah']; $newDate = date("d-m-Y", strtotime($originalDate));  if($newDate=='01-01-1970') echo "-"; else echo $newDate; ?> </td>
          <td><?php $originalDate = $row['tgl_camat']; $newDate = date("d-m-Y", strtotime($originalDate)); if($newDate=='01-01-1970') echo "-"; else echo $newDate; ?> </td>
          
           <td ><a href="<?php echo base_url()."Admin/Admin_imb/Lihat/";echo $row['id_simb'] ?>"> <i class="glyphicon glyphicon-eye-open"> </i> </a></td>
            
        <?php
          if($row['legalisasi_lurah'] == "Y"){
            ?>
            <td> 
            <i class="glyphicon glyphicon-ok"> </i>
            </td>
            <?php
          }
          else if($row['legalisasi_lurah'] == "N"){
            ?>
            <td>
                <a href="<?php echo base_url()."Admin/Admin_imb/legalisasilurah/";echo $row['id_simb'] ?>" class="btn btn-primary"> 
            Legalisasi</a>
            
            </td>
            <?php
          }
            else {
          ?>
            <td>
                <i class="glyphicon glyphicon-minus"> </i>
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
                    </div>
                        </div>
                        </div>
              </div><!-- /col-md-12 -->
          </section>
          </body>
</section>
</html>