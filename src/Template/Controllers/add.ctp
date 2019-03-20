<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Controller $controller
 */
?>
<?= $this->element('Form/nav-top', [
        'title' => 'Controller',
        'links' => [['class'=>'fa fa-list', 'title'=>'Controller List', 'action'=>'index', 'method'=>'link']
    ]]
);?>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Controller</h3>
            </div>
            <?= $this->Form->create($controller) ?>
                <fieldset>
                <div class="box-body">
                <div class="form-group">
                    <?= $this->Form->control('cname',['label'=>'Controller Name']) ?>
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


