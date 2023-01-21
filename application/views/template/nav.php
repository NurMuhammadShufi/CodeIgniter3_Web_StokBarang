<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<nav id="sidebar">
    <div class="p-4 pt-5 bg-primary h-100">
        <a href="<?= site_url(); ?>" class="img logo rounded-circle mb-3" style="background-image: url(<?= base_url('assets/img/logo_informatika.png'); ?>);"></a>
        <ul class="list-unstyled components">

            <li <?= (strtolower($this->uri->segment(1)) == 'dashboard') ? 'class="active"' : ''; ?>>
                <a href="<?= site_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <?php
            //tampilkan menu di bawah ini jika yang login admin
            if ($this->session->userdata('level') == 'admin') :
            ?>
                <li <?= (in_array(strtolower($this->uri->segment(1)), ['pegawai', 'tambah_pegawai', 'edit_pegawai'])) ? 'class="active"' : ''; ?>>
                    <a href="<?= site_url('pegawai'); ?>"><i class="fa fa-users"></i> Data Master</a>
                </li>

                <li <?= (in_array(strtolower($this->uri->segment(1)), ['supplier', 'tambah_supplier', 'edit_supplier'])) ? 'class="active"' : ''; ?>>
                    <a href="<?= site_url('supplier'); ?>">
                        <i class="fa fa-truck"></i> Data Project Leader
                    </a>
                </li>
            <?php
            endif;
            ?>

            <?php
            //tampilkan menu di bawah ini jika yang login pegawai
            if ($this->session->userdata('level') == 'pegawai') :
            ?>
                <li <?= (in_array(strtolower($this->uri->segment(1)), ['stok_barang'])) ? 'class="active"' : ''; ?>>
                    <a href="<?= site_url('stok_barang'); ?>"><i class="fa fa-cubes"></i> Data Stok Barang</a>
                </li>
            <?php
            endif;
            ?>
        </ul>

        <div class="footer">
            <p>
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </div>

    </div>
</nav>