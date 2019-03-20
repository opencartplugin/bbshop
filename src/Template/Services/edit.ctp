<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<!-- Content Header (Page header) -->
<?= $this->element('Form/nav-top', [
        'title' => 'Services',
        'links' => [['class'=>'fa fa-list', 'title'=>'Service List', 'action'=>'index','method'=>'link'], ['class'=>'fa fa-remove', 'title'=>'Delete', 'action'=>'delete', 'method'=>'postlink','confirm'=>__('Are you sure you want to delete # {0}?', $service->id), 'id'=>$service->id],
        ]]);?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Service</h3>
            </div>
            <?= $this->Form->create($service) ?>
                <fieldset>
                <div class="box-body">
                    <div class="form-group">
                        <?= $this->Form->control('sname',['label'=>'Service Name', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('price',['label'=>'Price', 'class'=>'form-control']);?>
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
</div>
