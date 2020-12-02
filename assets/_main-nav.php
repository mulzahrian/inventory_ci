<!--NAVIGASI MENU UTAMA-->

<div class="leftmenu">
  <ul class="nav nav-tabs nav-stacked">
    <li class="active"><a href="dashboard.php"><span class="icon-align-justify"></span> Dashboard</a></li>
    
    <!--MENU GUDANG / USER-->
    <?php
	if($_SESSION['login_hash']=="gudang")
	{
	?>
   
    <li class="dropdown"><a href="#"><span class="icon-th-list"></span> Data Barang</a>
      <ul>
        <li><a href="?cat=gudang&page=barang">Barang</a></li>
       
      </ul>
    </li>        
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Transaksi</a>
      <ul>
        <li><a href="?cat=gudang&page=entry">Barang Masuk</a></li>
        <li><a href="?cat=gudang&page=sell">Barang Keluar</a></li>       
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Laporan</a>
      <ul>
        <li><a href="?cat=gudang&page=monthreporting">Laporan Masuk dan Keluar</a></li>       
      </ul>
    </li>
    <?php
}elseif($_SESSION['login_hash']=="administrator"){
	?>
    <!--MENU ADMINISTRATOR-->
    
     <li class="dropdown"><a href="#"><span class="icon-th-list"></span> System </a>
      <ul>
        <li><a href="?cat=administrator&page=user">User Management</a></li>
       
      </ul>
    </li> 
    <li class="dropdown"><a href="#"><span class="icon-th-list"></span> Data Barang</a>
      <ul>
        <li><a href="?cat=administrator&page=barang">Barang</a></li>
       
      </ul>
    </li>        
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Transaksi</a>
      <ul>
        <li><a href="?cat=administrator&page=entry">Barang Masuk</a></li>
        <li><a href="?cat=administrator&page=sell">Barang Keluar</a></li>       
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span class="icon-pencil"></span> Laporan</a>
      <ul>
        <li><a href="?cat=administrator&page=monthreporting">Laporan Masuk dan Keluar</a></li>       
      </ul>
    </li>
 
  	<?php
	}
	?>
  </ul>
</div>
<!--leftmenu-->

</div>
<!--mainleft--> 
<!-- END OF LEFT PANEL -->