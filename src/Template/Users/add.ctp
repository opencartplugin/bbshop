<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- Content Header (Page header) -->
<?= $this->element('Form/nav-top', [
        'title' => 'Employee',
        'links' => [['class'=>'fa fa-list', 'title'=>'Employee List', 'action'=>'index','method'=>'link']
        ]]);?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Employee</h3>
            </div>
            <?= $this->Form->create($user) ?>
                <fieldset>
                <div class="box-body">
                        <?= $this->Form->control('name',['label'=>'Name', 'class'=>'form-control']);?>
                        <?= $this->Form->control('username',['label'=>'Username', 'class'=>'form-control']);?>
                        <?= $this->Form->control('password',['label'=>'Password', 'class'=>'form-control']);?>
                        <?= $this->Form->control('email',['label'=>'Email', 'class'=>'form-control']);?>
                        <?= $this->Form->control('birthdate', ['class' => 'form-control', 'type' => 'text', 'format' => 'Y-m-d', 'default' => date('Y-m-d'), 'value' => !empty($item->date) ? $item->date->format('Y-m-d') : date('Y-m-d')]);?>    
                        <?= $this->Form->control('birthplace',['label'=>'Birth Place', 'class'=>'form-control']);?>
                        
                        <?php $options = ['0' => 'Male', '1' => 'Female']; ?>
                        <div class="form-group input select">
                            <label class="control-label" for="gender">Gender</label>
                            <?= $this->Form->select('gender', $options, ['escape' => false, 'class'=>'form-control']);?>
                        </div>    
                        
                        <?= $this->Form->control('phone',['label'=>'Phone Number', 'class'=>'form-control']);?>
                        <?= $this->Form->control('shop_id',['label'=>'Branch Shop', 'class'=>'form-control']);?>
                    <?php //echo $this->Form->control('photo');?>
                        <?= $this->Form->control('roles._ids', ['options' => $roles, 'empty' => false, 'label'=>'Roles','class'=>'form-control select2', 'multiple'=>'multiple', 'data-placeholder'=>"Pilih Roles", 'style'=>'width: 100%;']);?>
                </div>
                </fieldset>
                <div class="box-footer">
                    <?= $this->Form->button(__('Submit')) ?>
                </div>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
<?php $this->Html->css([
    'AdminLTE./plugins/select2/select2.min',
    'AdminLTE./plugins/datepicker/datepicker3',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/select2/select2.full.min',
  'AdminLTE./plugins/datepicker/bootstrap-datepicker',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>

<script>
$(document).ready(function() {
    $(".select2").select2();
    $('#birthdate').datepicker({
        format: 'yyyy-mm-dd'
    
    });    
});    

</script>
<?php $this->end(); ?>
</div>
