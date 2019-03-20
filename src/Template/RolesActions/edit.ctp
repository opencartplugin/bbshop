<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolesAction $rolesAction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rolesAction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rolesAction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Roles Actions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolesActions form large-9 medium-8 columns content">
    <?= $this->Form->create($rolesAction) ?>
    <fieldset>
        <legend><?= __('Edit Roles Action') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
            echo $this->Form->control('action_id', ['options' => $actions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
