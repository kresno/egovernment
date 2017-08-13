<section id="main-content">
  <section class="wrapper">
  <div class="col-md-12 mt">
                      <div class="content-panel" style="padding-left: 10px">
                            <h4><i class="fa fa-angle-right"></i> Tambah Kelurahan</h4>
                            
                            <hr>
                                <thead>
                               <form name="data_penduduk" method="post" id="data" enctype='multipart/form-data' action="<?php echo base_url('admin/tambah_kelurahan/tambah');?>">
        
        <input  name="id_instansi" type="hidden" class="form-control" >
        <br/>
        <label>Nama Kelurahan</label>
        <input name="nama_instansi" class="form-control" type="text"  value="" id="nama_instansi" >
        <br/>
        <label>Kode Kelurahan</label>
        <input name="kode_instansi" class="form-control" type="text"  value="" id="kode_instansi" >
        <br/>
        <label>Alamat</label>
        <input name="alamat_instansi" class="form-control" type="text"  value="" id="alamat_instansi">  
        <br/>
        <label>Kode Pos</label>
        <input name="kode_pos" class="form-control" type="text"  value="" id="kode_pos">  
        <br/>   
        <label>Telepon</label>
        <input name="telepon" class="form-control" type="text"  value="" id="telepon">
        <br/>
        <input class="btn btn-info" type="submit" class="form-control"  value="Submit" id="submit" name="submit"  >
        <a href="<?php echo base_url ('admin/manajemen_kelurahan/tampil') ?>" class="btn btn-info" role="button">Batal</a>
                                    </form>                     
      </thead>
      </div>
      </div>
      </section>
      </section>
