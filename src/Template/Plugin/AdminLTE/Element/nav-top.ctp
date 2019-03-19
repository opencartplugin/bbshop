<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $this->Html->image('foto.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
          <span class="hidden-xs"><?= $this->getRequest()->getSession()->read('Auth.User.name');?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <?php echo $this->Html->image('foto.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>

            <p>
            <?= $this->getRequest()->getSession()->read('Auth.User.name');?>
              <small>Barber Shop</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="<?= $this->Url->build('/users/logout')?>" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
  </div>
</nav>
