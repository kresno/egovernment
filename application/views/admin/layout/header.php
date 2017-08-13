 <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a class="logo"><b>Kecamatan Bogor Utara</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout"  href="<?php echo base_url('admin/login')?>">Logout</a></li>
            	</ul>
                <div style=" color:white;padding: 15px 50px 5px 50px;float:right; font-size: 16px"> Last access : <?php date_default_timezone_set("Asia/Jakarta");
                echo date('d M Y');
                ?>
            </div>
          </div>
        </header>
      <!--header end-->
