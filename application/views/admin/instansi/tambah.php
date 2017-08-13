<?php
//validasi input
echo validation_errors('<div class="alert alert-warning">','</div>');
//open form
echo form_open(base_url('admin/instansi/tambah'));
?>
<section id="main-content">
          <section class="wrapper">

              
                    <div class="col-md-12 mt">
                      <div class="content-panel">
                      <label> User untuk Instansi?</label>
                      <select name="id_instansi" class="form-control">
                      	<?php foreach ($instansi as $instansi ) {?>
                      		<option value="<?php echo $instansi->id_instansi?>">
                      		<?php echo $instansi->id_instansi?>
                      		</option>
                      		<?php
                      	}?>
                      </select>
                      </div>
                      </div>
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username')?>" >
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password')?>" >
                      <label>Nama Lengkap</label>
                      <input name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama')?>">
                       <label>No Telp/Hp</label>
                      <input  type="text" name="nomor" class="form-control" placeholder="Nomor Telp/Hp" value="<?php echo set_value('nomor')?>">
                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
                <input type="reset" value="Batal" id="reset" onclick=self.history.back()>     

<?php
echo form_close();
