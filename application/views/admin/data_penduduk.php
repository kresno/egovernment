cm <!--main content start-->
 <section id="main-content">
  <section class="wrapper">


    <div class="col-md-12 mt">
      <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i> Data penduduk</h4>
        <hr>
        <thead>
        <a href="<?php echo base_url ('admin/tambah_penduduk') ?>" class="btn btn-info" role="button">Tambah Penduduk</a>
        </br>
      </br>

      <table class="table">
        <tr>
          <th>No</th>
          <th width="150px">NIK</th>
          <th width='150px'>Nama</th>
          <th>TTL</th>
          <th >Jenis Kelamin</th>
          <th width="150px">Alamat</th>
          <th>RT</th>
          <th>RW</th>
          <th>Status Kawin</th>
          <th>Pekerjaan</th>
          <th >Warga Negara</th>
          <th >Aksi</th>
        </tr>
        <?php $i=1;
        foreach ($data_penduduk as $row):?>
        <tr><td> <?php echo $i ;?></td>
          <td> <?php echo $row['nik'] ;?> </td>
          <td> <?php echo $row['nama'];?> </td>
          <td> <?php echo $row['tgl_lahir'];?></td>
          <td> <?php echo $row['jenis_kelamin'] ;?> </td>
          <td> <?php echo $row['alamat'];?> </td>
          <td> <?php echo $row['rt'];?> </td>
          <td> <?php echo $row['rw'];?> </td>
          <td> <?php echo $row['status_kawin'];?></td>
          <td> <?php echo $row['pekerjaan'] ;?> </td>
          <td> <?php echo $row['kewarganegaraan'];?> </td>
          <td ><a href="<?php echo base_url()."Admin/Edit_penduduk/index/";echo $row['nik'] ?>"> <i class="glyphicon glyphicon-pencil"> </i> </a></td>
          <td ><a href="<?php echo base_url()."Admin/Data_penduduk/delete/";echo $row['nik']?>"><i type="submit" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');" class="glyphicon glyphicon-trash"> </i> </a></td>
        </tr>  
        <?php $i++;?>
      <?php endforeach;?>     
    </table>
  </div><! --/content-panel -->
</div><!-- /col-md-12 -->
</div><!-- row -->

</section>
</section>

      <!--main content end-->