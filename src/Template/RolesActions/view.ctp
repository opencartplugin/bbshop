<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolesAction $rolesAction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Roles Action'), ['action' => 'edit', $rolesAction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Roles Action'), ['action' => 'delete', $rolesAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolesAction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles Actions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Roles Action'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rolesActions view large-9 medium-8 columns content">
    <h3><?= h($rolesAction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $rolesAction->has('role') ? $this->Html->link($rolesAction->role->id, ['controller' => 'Roles', 'action' => 'view', $rolesAction->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= $rolesAction->has('action') ? $this->Html->link($rolesAction->action->caname, ['controller' => 'Actions', 'action' => 'view', $rolesAction->action->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rolesAction->id) ?></td>
        </tr>
    </table>
</div>
