<?php $current_version = get_current_version(); ?>
<nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="my-auto nav-item">
            <span class="badge badge-success">v <?= (isset($current_version) && !empty($current_version)) ? $current_version : '1.0' ?></span>
        </li>
        <?php
        if (defined('ALLOW_MODIFICATION') && ALLOW_MODIFICATION == 0) {
        ?>
            <li class="my-auto ml-2 nav-item">
                <span class="badge badge-danger">Demo mode</span>
            </li>
        <?php } ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        <?php if (ALLOW_MODIFICATION == 0) { ?>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <?php if ($this->ion_auth->is_admin()) { ?>
                    <a href="#" class="dropdown-item">Welcome <b><?= ucfirst($this->ion_auth->user()->row()->username) ?> </b> ! </a>
                    <a href="<?= base_url('admin/home/profile') ?>" class="dropdown-item">
                        <i class="mr-2 fas fa-user"></i> Profile
                    </a>
                    <a href="<?= base_url('admin/home/logout') ?>" class="dropdown-item">
                        <i class="mr-2 fa fa-sign-out-alt"></i> Log Out
                    </a>
                <?php } else { ?>
                    <a href="#" class="dropdown-item">Welcome <b><?= ucfirst($this->ion_auth->user()->row()->username) ?> </b>! </a>
                    <a href="<?= base_url('delivery_boy/home/profile') ?>" class="dropdown-item"><i class="mr-2 fas fa-user"></i> Profile </a>
                    <a href="<?= base_url('delivery_boy/home/logout') ?>" class="dropdown-item "><i class="mr-2 fa fa-sign-out-alt"></i> Log Out </a>
                <?php } ?>
            </div>
        </li>
    </ul>
</nav>