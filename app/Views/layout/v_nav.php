<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('foto/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= session()->get('nama_user') ?></p>
                <a href="#"><i class="fa fa-circle text-success">
                    </i><?php if (session()->get('level') == 1) {
                            echo 'Admin';
                        } else if (session()->get('level') == 2) {
                            echo 'User';
                        } else {
                            echo 'Pelanggan';
                        } ?></a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <?php if (session()->get('level') == 1) { ?>
                <li>
                    <a href='Home'>
                        <i class="fa fa-home"></i> <span>Home</span>
                    </a>
                </li>
                <!--<li>
                    <a href='Bayarinfaq'>
                        <i class="fa fa-th"></i> <span>Pembayaran Infaq</span>
                    </a>
                </li>-->
                <li>
                    <a href='Bayarfitrah'>
                        <i class="fa fa-money"></i> <span>Pembayaran</span>
                    </a>
                </li>
                <!--<li>
                    <a href='Infaq'>
                        <i class="fa fa-th"></i> <span>Data Infaq</span>
                    </a>
                </li>-->
                <li>
                    <a href='Fitrah'>
                        <i class="fa fa-folder-o"></i> <span>Tampil Data</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (session()->get('level') == 2) { ?>
                <li>
                    <a href="<?= base_url() ?>/template/widgets.html">
                        <i class="fa fa-th"></i> <span>Menu User 1</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/template/widgets.html">
                        <i class="fa fa-th"></i> <span>Menu User 2</span>
                    </a>
                </li>
            <?php } ?>

            <?php if (session()->get('level') == 3) { ?>
                <li>
                    <a href="<?= base_url() ?>/template/widgets.html">
                        <i class="fa fa-home"></i> <span>Menu Pelanggan 1</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/template/widgets.html">
                        <i class="fa fa-th"></i> <span>Menu Pelanggan 2</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i><?php if (session()->get('level') == 1) {
                            echo 'Admin';
                        } else if (session()->get('level') == 2) {
                            echo 'User';
                        } else {
                            echo 'Pelanggan';
                        } ?></a></li>
            <!--<li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>-->
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">