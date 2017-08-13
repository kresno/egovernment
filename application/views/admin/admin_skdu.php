 <html>
      <section id="main-content">
          <body>
          <section class="wrapper"> 
              <div id="page-inner">
                  <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <table id="myTable" class="table table-responsive table-striped table-advance table-hover">
                              <thead><tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Tanggal Daftar</th>
                                <th>Tanggal Verif RT</th>
                                <th>Tanggal Verif RW</th>
                                <th>Tanggal Verif KEL</th>
                                <th>Tanggal Verif KEC</th>
                                <th>Lihat</th>
                                <th>Cetak Surat</th>
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
                              $this->db->where('rt',$rt);
                              $this->db->where('rw',$rw);
                              $this->db->like('kelurahan',$kelurahan);
                              $cek=$this->db->get('data_penduduk');
                              foreach ($cek -> result() as $row1) 
                              if(!empty($row1->nik)){
                                ?>

                              <tr>
                              <td><?php echo $no ?> </td>
                              <td><?php echo $row['nama_perusahaan'] ?> </td>
                              <td><?php echo $row['tgl_daftar'] ?> </td>
                              <td><?php echo $row['tgl_rt'] ?> </td>
                              <td><?php echo $row['tgl_rw'] ?> </td>
                              <td><?php echo $row['tgl_lurah'] ?> </td>
                              <td><?php echo $row['tgl_camat'] ?> </td>
                              <td ><a href="<?php echo base_url()."Admin/Admin_skdu/Lihat/";echo $row['id_skdu'] ?>"> <i class="glyphicon glyphicon-eye-open"> </i> </a></td>

                          <td ><a href="<?php echo base_url()."Admin/Admin_skdu/cetak/";echo $row['id_skdu'] ?>"> <i class="glyphicon glyphicon-print"> </i> </a></td>


                              <?php
                              if($row['legalisasi_rt'] == "Y"){
                                ?>
                                <td ><a href="<?php echo base_url()."Admin/Admin_skdu/legalisasi/";echo $row['id_skdu'] ?>"> 
                                <i class="glyphicon glyphicon-ok"> </i> </a>
                                </td>

                                <?php
                              }
                              else{
                              ?>
                                <td ><a href="<?php echo base_url()."Admin/Admin_skdu/legalisasi/";echo $row['id_skdu'] ?>"> 
                                <i class="glyphicon glyphicon-minus"> </i> </a>
                                </td>
                                <?php
                              }
                              ?>

                              <?php
                              if($row['legalisasi_rw'] == "Y"){
                                ?>
                                <td > 
                                <i class="glyphicon glyphicon-ok"> </i> 
                                </td>
                                <?php
                              }
                              else{
                              ?>
                                <td >
                                <i class="glyphicon glyphicon-minus"> </i>
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
                                <i class="glyphicon glyphicon-minus"> </i> 
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
                        </div>
                        </div>
                    </div>
                  </div>
                  </div>
              </div>
          </section>
              </body>
      </section>
</html>