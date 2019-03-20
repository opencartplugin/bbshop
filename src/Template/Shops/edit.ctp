<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shop $shop
 */
?>
<!-- Content Header (Page header) -->
<?= $this->element('Form/nav-top', [
        'title' => 'Shops',
        'links' => [['class'=>'fa fa-list', 'title'=>'Shop List', 'action'=>'index','method'=>'link'], ['class'=>'fa fa-remove', 'title'=>'Delete', 'action'=>'delete', 'method'=>'postlink','confirm'=>__('Are you sure you want to delete # {0}?', $shop->id), 'id'=>$shop->id],
        ]]);?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Shop</h3>
            </div>
            <?= $this->Form->create($shop) ?>
                <fieldset>
                <div class="box-body">
                    <div class="form-group">
                        <?= $this->Form->control('sname',['label'=>'Shop Name', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('address',['label'=>'Address', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('phone',['label'=>'Phone Number', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('fax',['label'=>'Fax', 'class'=>'form-control']);?>
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

