<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/'); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="<?php echo $this->Url->build('/pages/home2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-database"></i> <span>Master</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/users/index'); ?>"><i class="fa fa-check-circle-o"></i> Employee List</a></li>
            <li><a href="<?php echo $this->Url->build('/shops/index'); ?>"><i class="fa fa-check-circle-o"></i> Shops List</a></li>
            <li><a href="<?php echo $this->Url->build('/services/index'); ?>"><i class="fa fa-check-circle-o"></i> Services List</a></li>
        </ul>
    </li>
    <!--<li class="treeview">
        <a href="#">
            <i class="fa fa-dollar"></i> <span>Transaksi</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/purchases/index'); ?>"><i class="fa fa-check-circle-o"></i> Daftar PO</a></li>
        </ul>
    </li>-->

    <li class="treeview">
        <a href="#">
            <i class="fa fa-truck"></i> <span>Transactions</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/purchases/index'); ?>"><i class="fa fa-check-circle-o"></i> Employee Work List</a></li>
            <li><a href="<?php echo $this->Url->build('/purchases/index-arrivals'); ?>"><i class="fa fa-check-circle-o"></i> Report</a></li>
        </ul>

    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-cubes"></i> <span>System</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build('/users/index'); ?>"><i class="fa fa-check-circle-o"></i> Daftar User</a></li>
            <li><a href="<?php echo $this->Url->build('/roles/index'); ?>"><i class="fa fa-check-circle-o"></i> Daftar Role</a></li>
            <li><a href="<?php echo $this->Url->build('/actions/index'); ?>"><i class="fa fa-check-circle-o"></i> Daftar Action</a></li>
            <li><a href="<?php echo $this->Url->build('/controllers/index'); ?>"><i class="fa fa-check-circle-o"></i> Daftar Controller</a></li>
        </ul>
    </li>

    <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
</ul>
