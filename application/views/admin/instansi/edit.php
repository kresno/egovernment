<section id="main-content">
  <section class="wrapper">
  <!-- Small boxes (Stat box) -->
  <div class="col-md-12 mt">
                      <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Edit Pengguna</h4>
                            <hr>
                                <thead>
                               
      
      
  
      <form role="form" method="post" action=""  enctype="multipart/form-data" action="<?php echo base_url('admin/instansi/ubah');?>"> 
       <!-- text input -->
       <input type="hidden"  name="id" value="" />
       <div class="form-group">
        <label>Username</label>
        <input  name="username" type="text" class="form-control"  value="<?php echo $ubah[0]['username']?>">
      </div>
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input name="nama" class="form-control"  value="">
      <div class="form-group">
        <label>Instansi</label>
        <input  name="instansi" type="text" class="form-control" value="">
      </div>
      <p>
        <input type='submit' value='Simpan' id='submit' />
        <input type='reset' value='Batal' id='reset' onclick=self.history.back()>
                  <br />
                </p>


    </form>
  </div>

</thead>


</section>
</section>