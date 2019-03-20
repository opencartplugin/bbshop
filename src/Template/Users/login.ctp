<?php $this->layout = 'AdminLTE.login'; ?>

<?= $this->Form->create()?>
<div class="form-group has-feedback">
    <?= $this->Form->control('username',['class'=>'form-control','placeholder'=>'Username'])?>
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->control('password',['class'=>'form-control','placeholder'=>'Password'])?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
    </div>
    <!-- /.col -->
    <div class="col-xs-4">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-block btn-flat']) ?>
    </div>
    <!-- /.col -->
</div>
<?= $this->Form->end() ?>
