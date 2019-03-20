<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shop[]|\Cake\Collection\CollectionInterface $shops
 */
?>

<?= $this->element('Form/nav-top', [
        'title' => 'Shops',
        'links' => [['class'=>'fa fa-plus', 'title'=>'Add Shop', 'action'=>'add','method'=>'link']],
    ]
);?>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Shop List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Shop Name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>

                    </thead>
                    <tbody>
                        <?php foreach ($shops as $shop): ?>
                        <tr>
                            <td><?= $this->Number->format($shop->id) ?></td>
                            <td><?= h($shop->sname) ?></td>
                            <td><?= h($shop->phone) ?></td>
                            <td><?= h($shop->fax) ?></td>
                           <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shop->id],['class'=>'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id),'class'=>'btn btn-danger']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('prev')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<?php
$this->Html->css([
    'AdminLTE./plugins/datatables/dataTables.bootstrap',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/datatables/jquery.dataTables.min',
  'AdminLTE./plugins/datatables/dataTables.bootstrap.min',
],
['block' => 'script']);
?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<?php $this->end(); ?>
