<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudut Depok | Wisata</title>
    
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.css">
    
    <link rel="stylesheet" href="<?= base_url('assets/')?>vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/')?>vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/app.css">
    <link rel="shortcut icon" href="<?= base_url('asset/')?>images/icon.png" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <!-- <img src="<?= base_url('assets/')?>images/logo.svg" alt="" srcset=""> -->
                    <span>Sudut Depok</span>
                </div>
    <div class="sidebar-menu">
        <ul class="menu">      
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item active ">
                    <a href="<?php echo base_url(); ?>c_admin" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                </li>
         
                <li class='sidebar-title'>Forms &amp; Tables</li>            
            
                <li class="sidebar-item">
                    <a href="<?php echo base_url(); ?>c_admin/form_wisata" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Input Data Wisata</span>
                    </a>                    
                </li>

                <li class="sidebar-item">
                    <a href="<?php echo base_url(); ?>c_admin/form_tiket" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Input Tiket Wisata</span>
                    </a>                    
                </li>

                 <li class="sidebar-item">
                    <a href="<?php echo base_url(); ?>c_admin/konfirmasi_tiket" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Konfirmasi Pesanan Tempat</span>
                    </a>                    
                </li>

                <li class="sidebar-item  ">
                    <a href="<?php echo base_url(); ?>c_admin/laporan_penjualan" class='sidebar-link'>
                        <i data-feather="file" width="20"></i> 
                        <span>Laporan Penjualan</span>
                    </a>
                    
                </li>
        </ul>
    </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>