<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Edit Pengguna</h4>
                            <hr>
                                <thead>
      <?php
      foreach ($data as $row) 
      ?>
  
      <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Edit_rt/update');?>"> 
       <!-- text input -->
       <input  name="user_id" type="hidden" class="form-control"  value="<?php echo $row['user_id'];?>">
       <div class="form-group">
        <label>Username</label>
        <input  name="username" type="text" class="form-control"  value="<?php echo $row['username'];?>">

      </div>
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input name="nama_lengkap" type="tex"t class="form-control"  value="<?php echo $row['nama_lengkap'];?>">
      <div class="form-group">
        <label>Password</label> 
        <input name="password" type="text" class="form-control"  value="<?php echo $row['password'];?>">
        
        </div>
      

      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>

          </div>
    </form>
                          </thead>
  </div>
      </div>
</section>
</section>