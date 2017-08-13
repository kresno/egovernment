
<!--sidebar start-->
<aside>
  <div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">

     <p class="centered"><img src="<?php echo base_url('assets/img/icon.png')?>" width="60"></a></p>
     <h5 class="centered">Kecamatan Bogor Utara</h5>

     <li class="mt">
      <a <?php if($title=='Halaman Dashboard') echo "class='active'"; ?>  href="<?php echo base_url('admin/dashboard')?>">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
      </a>
    </li>

    
    <li class="sub-menu">
      <a <?php if($title!='Halaman Dashboard') echo "class='active'"; ?> href="javascript:;" >
        <i class="fa fa-list-alt"></i>
        <span>Pelayanan dan Legalisasi</span>
      </a>
      <ul class="sub">
        <li><a  href="<?php echo base_url('admin/Admin_skdu/data_user')?>">SKDU</a></li>
        <li><a  href="<?php echo base_url('admin/admin_sku/data_user')?>">SKU</a></li>
        <li><a  href="<?php echo base_url('admin/admin_skl/data_user')?>">SKL</a></li>
        <li><a  href="<?php echo base_url('admin/admin_skk/data_user')?>">SKK</a></li>
        <li><a  href="<?php echo base_url('admin/admin_sktt/data_user')?>">SKTT</a></li>
        <li><a  href="<?php echo base_url('admin/admin_ktp/data_user')?>">KTP</a></li>
        <li><a  href="<?php echo base_url('admin/admin_imb/data_user')?>">IMB</a></li>
        <li><a  href="<?php echo base_url('admin/admin_ho/data_user')?>">HO</a></li> 
        </ul>
    </li>

   
        
        <?php 
        if ($this->session->userdata('level')=='kecamatan') {?>
             <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-cogs"></i>
                <span>Manajemen Informasi</span>
              </a>
              <ul class="sub">
            <li class="<?activate_menu('manajemen_kelurahan/tampil');?>">
            <a  href="<?php echo base_url('admin/manajemen_kelurahan/tampil')?>">Informasi Kelurahan</a></li>
            <li><a  href="<?php echo base_url('admin/data_penduduk/tampil')?>">Data Penduduk</a></li>
            <li><a  href="<?php echo base_url('admin/manajemen_pengguna/tampil')?>">Manajemen Pengguna</a></li>
            </ul>
            </li>
        <?php } ?>
        

      

  </ul>
  <!-- sidebar menu end-->
</div>
</aside>
<!--sidebar end-->
