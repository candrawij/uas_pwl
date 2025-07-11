<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
            <img
            src="<?= base_url()?>kaiadmin-lite-1.2.0/assets/img/kaiadmin/logo_light.svg"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
            />
        </a>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
            </button>
        </div>
        <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
        </button>
        </div>
        <!-- End Logo Header -->
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <ul class="nav nav-collapse">
                        <li>
                            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>

                            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Keranjang</span>
                            </a>

                            <?php
                            if (session()->get('role') == 'admin') {
                            ?>
                                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                                    <i class="fas fa-box"></i>
                                    <span>Produk</span>
                                </a>
                            <?php
                            }
                            ?>

                            <?php
                            if (session()->get('role') == 'admin') {
                            ?>
                                <a class="nav-link <?php echo (uri_string() == 'user') ? "" : "collapsed" ?>" href="user">
                                    <i class="fas fa-users"></i>
                                    <span>User</span>
                                </a>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->