<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Action $action
 */
?>
<?= $this->element('Form/nav-top', [
        'title' => 'Action',
        'links' => [['class'=>'fa fa-list', 'title'=>'Daftar Action', 'action'=>'index', 'method'=>'link'],
    ]]
);?>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <?= $this->Form->create($action) ?>
                <fieldset>
                <div class="box-body">
                <div class="form-group">
                    <?= $this->Form->control('controller_id', ['options' => $controllers, 'empty' => false]) ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->control('aname',['label'=>'Nama Action']) ?>
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

