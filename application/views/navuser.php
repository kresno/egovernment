
<!--sidebar start-->
<aside >
  <div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion" >
     <h5 class="centered" >PILIH MENU UTAMA</h5>

     <li class="mt">
      <a <?php if($Isi == 'propem') echo "class='active'" ?>  href="<?php echo base_url('home/profile')?>">
        <i class="fa fa-dashboard"></i>
        <span>Profil Pemerintah</span>
      </a>
    </li>

    <li class="sub-menu">
      <a <?php if($Isi == 'pejabat') echo "class='active'" ?>  href=" <?php echo base_url('home/pejabat')?>" >
        <i class="fa fa-list-alt"></i>
        <span  >Profil Pejabat</span>
      </a>
    </li>
    <li class="sub-menu">
      <a <?php if($Isi == 'pelayanan') echo "class='active'" ?> href=" <?php echo base_url('home/pelayanan')?>" >
        <i class="fa fa-list-alt"></i>
        <span  >Perizinan Online</span>
      </a>
    </li>
    <li class="sub-menu">
      <a <?php if($Isi == 'berita') echo "class='active'" ?>  href=" <?php echo base_url('home/berita')?>" >
        <i class="fa fa-list-alt"></i>
        <span  >Informasi dan Berita</span>
      </a>
    </li>
    
    

    
  </ul>
  <!-- sidebar menu end-->
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

</div>
</aside>
<!--sidebar end-->

