<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>

<!-- Content Header (Page header) -->
<?= $this->element('Form/nav-top', [
        'title' => 'Role',
        'links' => [['class'=>'fa fa-list', 'title'=>'Daftar Role', 'action'=>'index','method'=>'link']
        ]]);?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Roles</h3>
            </div>
            <?= $this->Form->create($role) ?>
                <fieldset>
                <div class="box-body">
                    <div class="form-group">
                        <?= $this->Form->control('rolename',['label'=>'Nama Role', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('actions._ids', ['options' => $actions, 'empty' => false, 'label'=>'Controller/Action','class'=>'form-control select2', 'multiple'=>'multiple', 'style'=>"width: 100%;"]);?>
                    </div>
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
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/select2/select2.full.min',
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>

<script>
$(document).ready(function() {
    $(".select2").select2();
});    

</script>
<?php $this->end(); ?>

