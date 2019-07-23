<?php

$akses = $this->session->userdata('role_id');

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/');?>dist/img/moi.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>KARTIKA</p>
          <a href="#"><i class="fa fa-circle text-success"></i> KLINIK</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MENU UTAMA</li>
        <?php if ($akses == 1 || $akses == 4 ) { ?>
          <li><a href="<?php echo base_url('pendaftaran/pasien');?>"><i class="fa fa-circle-o"></i> Pendaftaran Pasien Baru</a></li>

        <?php } ?>

        <!-- <?php if ($akses != 3) { ?>
        <li><a href="<?php echo base_url('rujukan/pasien');?>"><i class="fa fa-circle-o"></i> Data Rujukan</a></li>
        <?php } ?> -->

        <?php if ($akses == 1) { ?>
        <li><a href="<?php echo base_url('datapasien/terdaftar');?>"><i class="fa fa-circle-o"></i> Data Pasien Terdaftar</a></li>
        <?php } ?>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Daftar Poli</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/data-poli.html"><i class="fa fa-circle-o"></i> Data Poli</a></li>
          </ul>
        </li> -->
      <?php if ($akses == 1) {?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>OBAT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kodeobat/form');?>"><i class="fa fa-circle-o"></i> Tambah Obat</a></li>
            <li><a href="<?php echo base_url('kodeobat/daftar');?>"><i class="fa fa-circle-o"></i> List Obat</a></li>
          </ul>
        </li>
      <?php }?>

        <?php if ($akses == 1) { ?>
          <li><a href="<?php echo base_url('dokter');?>"><i class="fa fa-circle-o"></i> Data Dokter</a></li>
          <li><a href="<?php echo base_url('datapasien/antrian');?>"><i class="fa fa-circle-o"></i> Antrian Pasien</a></li>
        <?php } ?>

        <?php if ($akses == 1) { ?>
        <li><a href="<?php echo base_url('kasir');?>"><i class="fa fa-circle-o"></i>Kasir</a></li>
        <?php } ?>

        <?php if ($akses == 1 | $akses == 4 ) { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Data Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <!-- <li><a href="<?php echo base_url('pendaftaran/laporan_data');?>"><i class="fa fa-circle-o"></i> Laporan Pasien</a></li> -->
              <li><a href="<?php echo base_url('datapasien/laporanMedis');?>"><i class="fa fa-circle-o"></i> Riwayat Individu Pasien</a></li>
              <li><a href="<?php echo base_url('kasir/keuangan');?>"><i class="fa fa-circle-o"></i> Keuangan</a></li>
            </ul>
          </li>
        <?php } ?>
        <?php if ($akses == 1 ) { ?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Manajemen Pengguna</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('pendaftaran/register');?>"><i class="fa fa-circle-o"></i> Buat Akun</a></li>
              <li><a href="<?php echo base_url('pendaftaran/daftar_user');?>"><i class="fa fa-circle-o"></i> Daftar Pengguna</a></li>
            </ul>
          </li>
        <?php } ?>

        <?php if($akses == 1) {?>
          <li><a href="<?php echo base_url('kodeobat/daftar');?>"><i class="fa fa-circle-o"></i> Ketersediaan Obat</a></li>
        <?php }?>

        <?php if($akses == 2) {?>
          <li><a href="<?php echo base_url('datapasien/pemeriksaan');?>"><i class="fa fa-circle-o"></i> Pemeriksaan</a></li>
        <?php }?>

        <?php if($akses == 3) {?>
          <li><a href="<?php echo base_url('datapasien/pemeriksaan');?>"><i class="fa fa-circle-o"></i> Pembayaran</a></li>
        <?php }?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
