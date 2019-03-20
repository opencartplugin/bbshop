<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolesAction[]|\Cake\Collection\CollectionInterface $rolesActions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Roles Action'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolesActions index large-9 medium-8 columns content">
    <h3><?= __('Roles Actions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rolesActions as $rolesAction): ?>
            <tr>
                <td><?= $this->Number->format($rolesAction->id) ?></td>
                <td><?= $rolesAction->has('role') ? $this->Html->link($rolesAction->role->id, ['controller' => 'Roles', 'action' => 'view', $rolesAction->role->id]) : '' ?></td>
                <td><?= $rolesAction->has('action') ? $this->Html->link($rolesAction->action->caname, ['controller' => 'Actions', 'action' => 'view', $rolesAction->action->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rolesAction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolesAction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolesAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolesAction->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
