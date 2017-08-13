<section id="main-content">
  <section class="wrapper">
    <div class="col-md-12 mt">
      <div class="content-panel" style="padding-left: 10px">
        <h4><i class="fa fa-angle-right"></i> Edit Pengguna</h4>

        <hr>
        <thead>
          <?php
          foreach ($data as $row) 
            ?>
          <form role="form" method="post"  enctype='multipart/form-data' action="<?php echo base_url('Admin/Edit_pengguna/update');?>">

            <input  name="username" type="hidden" class="form-control" value="<?php echo $row['username'];?>">
            <br/>
            <label>Password</label>
            <td><input name="password" class="form-control" type="password"  value=" <?php echo $row['password'];?>">
              <br/>
              <label>Nama Lengkap</label>
              <input name="nama_lengkap" class="form-control" type="text"  value="<?php echo $row['nama_lengkap'];?>"  >
              <br/>
              <label>Level</label>
              <td><input name="level" class="form-control" type="text"  value="<?php echo $row['level'];?>" >  
                <br/>  
                <label>Email</label>
                <input name="email" class="form-control" type="text"  value="<?php echo $row['email'];?>"   ></td>
                <br/>
              <input class="btn btn-info" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
<a href="<?php echo base_url ('admin/manajemen_pengguna/tampil') ?>" class="btn btn-info" role="button">Batal</a>
            </form>
          </thead>
      </div>
    </div>
  </section>
</section>
