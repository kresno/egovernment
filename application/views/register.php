<section style="padding:60px">
 <!-- main, sidebar --> 
 <div class="main">  
   <div class="wrap">
    <div class="col-md-12" >
      <div class="content_bottom" style=" margin-left:100px;  background-color: white;">
        
        <script type="text/javascript">
function cekform(){
  if(!$("#NIK").val()){
    alert('Maaf NIK tidak boleh kosong');
    $("#NIK").focus();
    return false
  }
  if(!$("#password").val()){
    alert('Maaf PSassword tidak boleh kosong');
    $("#password").focus();
    return false
  }
  if(!$("#nama").val()){
    alert('Maaf Nama tidak boleh kosong');
    $("#nama").focus();
    return false
  }
  if(!$("#tgl_lahir").val()){
    alert('Maaf Tanggal Lahir tidak boleh kosong');
    $("#tgl_lahir").focus();
    return false
  }
  if(!$("#jenis_kelamin").val()){
    alert('Maaf Jenis Kelamin tidak boleh kosong');
    $("#jenis_kelamin").focus();
    return false
  }
  if(!$("#alamat").val()){
    alert('Maaf Alamat tidak boleh kosong');
    $("#alamat").focus();
    return false
  }
  if(!$("#rt").val()){
    alert('Maaf RT tidak boleh kosong');
    $("#rt").focus();
    return false
  }
  if(!$("#rw").val()){
    alert('Maaf RW tidak boleh kosong');
    $("#rw").focus();
    return false
  }
  if(!$("#status_kawin").val()){
    alert('Maaf Status kawin tidak boleh kosong');
    $("#status_kawin").focus();
    return false
  }
    if(!$("#no_hp").val()){
    alert('Maaf No Hp tidak boleh kosong');
    $("#no_hp").focus();
    return false
  }
  
  if(!$("#pekerjaan").val()){
    alert('Maaf NIK tidak boleh kosong');
    $("#pekerjaan").focus();
    return false
  }
  if(!$("#warga").val()){
    alert('Maaf NIK tidak boleh kosong');
    $("#warga").focus();
    return false
  }

}
</script>
          
<div style="padding: 50px">
  
    <div class="row">
      <div class="col-md-6">
        <?php
        $info=$this->session->flashdata('info');
        if(!empty($info)){
        ?><h4><?php echo $info ?></h4><?php
        }
        else { 
        foreach ($data as $row) 
          ?>            
        <h4>Silahkan isi data diri anda dengan lengkap dan sesuai dengan KTP!</h4>
              
        <form role="form" method="post"  action="<?php echo base_url('Register/tambah');?>" onsubmit=" return cekform();"> 
       <!-- text input -->
       <div class="form-group">
        <label>NIK</label>
        <input  name="nik" id="NIK" type="text" class="form-control" maxlength="16">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input  name="password" id='password'type="password" class="form-control" >
      </div>
       <div class="form-group">
        <label>Nama</label>
        <input  name="nama" id="nama" type="text" class="form-control"  >
      </div>
      <div class="form-group">
        <label>Tanggal Lahir</label>
        <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control"  >
        </div>
        <div class="form-group">
        <label>Tempat Lahir</label>
        <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control"  >
        </div>
            <div class="form-group">
        <label>Agama</label>
        <input name="agama" id="agama" type="text" class="form-control"  >
        </div>
      <div class="form-group">
        <label>Jenis Kelamin</label> 
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        <option >--Pilih--</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
        </select>
        </div>
      <div class="form-group">
        <label>Alamat</label>
        <input  name="alamat" id="alamat" type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label>RT</label>
        <input  name="rt" id="rt" type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label>RW</label>
        <input  name="rw" id="rw" type="text" class="form-control" >
      </div>
    <div class="form-group">
        <label> Kelurahan </label>
        <select name="kelurahan" id='kelurahan' class="form-control">
        <option >--Pilih--</option>
        <option value="Kelurahan Bantarjati">Bantarjati</option>
        <option value="Kelurahan Tegal Gundil">Tegal Gundil</option>
        <option value="Kelurahan Cibuluh">Cibuluh</option>
        <option value="Kelurahan Tanah Baru">Tanah Baru</option>
        <option value="Kelurahan Ciluar">Ciluar</option>
        <option value="Kelurahan Cimahpar">Cimahpar</option>
        <option value="Kelurahan Kedunghalang">Kedunghalang</option>
        <option value="Kelurahan Ciparigi">Ciparigi</option>
        </select>
      </div>
      
      <div class="form-group">
        <label>Status Kawin</label>
        <select name="status_kawin"id='status_kawin' class="form-control">
        <option >--Pilih--</option>
        <option value="kawin">Kawin</option>
        <option value="belum kawin">Belum kawin</option>
        </select>
            </div>
        <div class="form-group">
            <label>No Handphone</label>
            <input name="no_hp" id='no_hp' class="form-control">
            </div>
        <div class="form-group">
        <label> Email </label>
        <input name="email" id='email' class="form-control">
           </div>
      <div class="form-group">
        <label>Pekerjaan</label>
        <input  name="pekerjaan" id="pekerjaan" type="text" class="form-control" >
      </div>
      <div class="form-group">
        <label>Warga Negara</label>
        <select name="kewarganegaraan" id="warga" class="form-control">
        <option >--Pilih--</option>
        <option value="WNA">Warga Negara Asing</option>
        <option value="WNI">Warga Negara Indonesia</option>
        </select>
      </div>
      <p>Dengan ini saya menyatakan data yang diisi adalah benar. <br >
      <input type='submit' value='Register' id='submit' />
                  <br />
                </p>
    </form>
    <?php } ?>
            <div class="sign-footer">
           </div>
           </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
        </div>
       </div>
     </div>
  </section>
